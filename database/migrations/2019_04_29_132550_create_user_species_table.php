<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSpeciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_species', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('species_id');
            $table->string('name');
            $table->binary('photo')->nullable();
            $table->dateTime('date_water')->nullable();
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
        Schema::dropIfExists('user_species');
    }
}
