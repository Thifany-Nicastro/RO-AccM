<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonagensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personagens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->uuid('uuid');
            $table->string('nome');
            $table->string('raca');
            $table->boolean('sexo');
            $table->integer('cabelo')->nullable();
            $table->string('classe');
            $table->integer('cor')->nullable();
            $table->integer('level')->nullable();
            $table->string('conjuge')->nullable();
            $table->string('filho')->nullable();
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
        Schema::dropIfExists('personagens');
    }
}
