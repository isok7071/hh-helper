<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('external_id')->unique();
            $table->string('name', 400);
            $table->string('url');
            $table->foreignId('employer_id')
                ->constrained('employers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->decimal('salaryFrom')->nullable()->default(null);
            $table->decimal('salaryTo')->nullable()->default(null);
            $table->bool('gross')->nullable()->default(null);
            $table->string('currency')->nullable()->default(null);
            $table->timestamp('published_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
