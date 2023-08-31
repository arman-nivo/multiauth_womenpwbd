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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('img');
            $table->date('course_start'); // Use the 'date' data type
            $table->date('course_end');   // Use the 'date' data type
            $table->string('service_provider');
            $table->integer('service_price');
            $table->integer('service_review');
            $table->longText('service_details');
            $table->integer('service_discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
