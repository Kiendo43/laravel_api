<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('    ', function (Blueprint $table) {
            $table->bigIncrements('id_customer');
            $table->string('name_customer');
            $table->string('phone_customer');
            $table->string('adress_customer');
            $table->string('email_customer');
            $table->string('city_customer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
