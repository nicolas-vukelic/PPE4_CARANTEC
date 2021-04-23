<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Event', function (Blueprint $table) {
            $table->integer('IDEVENT', true);
            $table->string('NOM', 250);
            $table->integer('IDPUBCIBLE')->index('IDPUBCIBLE');
            $table->integer('AFFICHE');
            $table->date('DATE');
            $table->time('HEUREDEBUT');
            $table->integer('JAUGE');
            $table->string('RESUME', 500);
            $table->integer('IDLIEU')->index('IDLIEU');
            $table->integer('IDTARIF')->index('IDTARIF');
            $table->integer('IDSESSION')->index('IDSESSION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Event');
    }
}
