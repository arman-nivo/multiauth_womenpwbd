
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
        Schema::create('lawservices', function (Blueprint $table) {
            $table->id();
            $table->string('l_name');
            $table->string('law_img');
            $table->string('service_provider')->default('default_value');
            $table->integer('service_price');
            $table->integer('service_provider_review');
            $table->longText('service_provider_details');
            $table->longtext('service_procedure');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawservices');
    }
};
