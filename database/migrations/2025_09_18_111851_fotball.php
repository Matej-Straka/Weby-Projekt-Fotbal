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
        Schema::create('league', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('logo');
            $table->tinyInteger('level');
            $table->integer('created_at');
            $table->integer('updated_at');
            $table->integer('deleted_at')->nullable();
        });

        Schema::create('season', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('start')->index();
            $table->integer('finish')->index();
            $table->integer('created_at');
            $table->integer('updated_at');
            $table->integer('deleted_at')->nullable();
        });

        Schema::create('league_season', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_league')->unsigned();
            $table->integer('id_season')->unsigned();
            $table->integer('created_at');
            $table->integer('updated_at');
            $table->integer('deleted_at')->nullable();

            $table->foreign('id_league')->references('id')->on('league')->onDelete('cascade');
            $table->foreign('id_season')->references('id')->on('season')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('league_season');
        Schema::dropIfExists('league');
        Schema::dropIfExists('season');
    }
};
