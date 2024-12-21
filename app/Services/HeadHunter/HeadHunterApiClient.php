<?php

namespace App\Services\HeadHunter;

use Exception;
use BadMethodCallException;
use GuzzleHttp\Psr7\Request;
use Psr\Log\LoggerInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\NetworkExceptionInterface;
use Psr\Http\Client\RequestExceptionInterface;
use AlexMasterov\OAuth2\Client\Provider\HeadHunter;
use App\Services\HeadHunter\Vacancies\VacanciesService;

/**
 * @method VacanciesService vacancies()
 */
class HeadHunterApiClient
{
    private const DEFAULT_HOST = 'https://api.hh.ru';

    private array $defaultHeaders = [
        'accept' => 'text/plain',
        'Content-Type' => 'application/json',
    ];

    protected array $serviceInstances = [];

    public function __construct(
        private HeadHunter $httpClient,
        private array $config = [],
        private LoggerInterface $logger
    ) {
        $this->config = $config + $this->config;
    }

    protected static function getServiceMap(): array
    {
        return [
            'vacancies' => VacanciesService::class,
        ];
    }

    private function getHost(): string
    {
        return $this->config['host'] ?? self::DEFAULT_HOST;
    }

    public function exec(
        string $method,
        string $uri,
        array|string|null $data = null,
        array $headers = []
    ): string {
        if ($this->config['dev'] ?? false) {
            return '{}';
        }

        if($method === 'GET') {
            $uri .= '?' . http_build_query($data);
        }

        try {
            $request = new Request(
                $method,
                $this->getHost() . $uri,
                ($headers + $this->defaultHeaders),
                (empty($data) || $method === 'GET' ? null : json_encode($data))
            );

            $response = $this->httpClient->getResponse($request);

            $this->logger->debug(
                'CALL ' . (string) $request->getUri(),
                [
                    'request' =>  [
                        'method' => $request->getMethod(),
                        'uri' => (string) $request->getUri(),
                        'headers' => $request->getHeaders(),
                        'body' => (string) $request->getBody(),
                    ],
                    'response' => (string) $response->getBody()
                ]
            );
            //TODO поправить клиент, настроить логирование, хост, конфиги и тд
            return (string) $response->getBody();
        } catch (ClientExceptionInterface $ex) {
            $context = [];

            if ($ex instanceof NetworkExceptionInterface || $ex instanceof RequestExceptionInterface) {
                $context['request'] = [
                    'method' => $ex->getRequest()->getMethod(),
                    'uri' => (string) $ex->getRequest()->getUri(),
                    'headers' => $ex->getRequest()->getHeaders(),
                    'body' => (isset($originOptions['multipart']) ? 'MULTIPART_BODY' : (string)  $ex->getRequest()->getBody()),
                ];
            }

            $this->logger->error((string) $ex, $context);

            throw $ex;
        } catch (Exception $ex) {
            $this->logger->error((string) $ex);

            throw $ex;
        }
    }

    public function __call(string $name, array $args): object
    {
        $services = $this->getServiceMap();

        if (!array_key_exists($name, $services)) {
            throw new BadMethodCallException('No client methods exist with the name: ' . $name);
        }

        if (!array_key_exists($name, $this->serviceInstances)) {
            $class = $services[$name];
            $this->serviceInstances[$name] = app($class) ;
            //TODO fix
        }

        return $this->serviceInstances[$name];
    }
}
