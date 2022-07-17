<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('department');
            $table->string('sex');
            $table->string('matric_number');
            $table->string('country_of_origin')->nullable();
            $table->string('state_of_origin');
            $table->string('lga_of_origin');
            $table->string('country_of_residence');
            $table->string('state_of_residence');
            $table->string('graduation_year');
            $table->string('day_month_of_birth');
            $table->text('contact_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
};
