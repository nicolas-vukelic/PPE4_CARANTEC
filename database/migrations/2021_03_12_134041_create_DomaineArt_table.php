<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomaineArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DomaineArt', function (Blueprint $table) {
            $table->integer('IDDOMAINE', true);
            $table->string('LIBELLEDOMAINE', 500);
            $table->string('DESCRIPTIF', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DomaineArt');
    }
}
