<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Session', function (Blueprint $table) {
            $table->integer('IDSESSION', true);
            $table->integer('ANNEE');
            $table->string('THEME', 50);
            $table->string('DESCRIPTIF', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Session');
    }
}
