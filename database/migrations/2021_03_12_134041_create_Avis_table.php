<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Avis', function (Blueprint $table) {
            $table->integer('IDAVIS', true);
            $table->integer('IDEVENT')->index('IDEVENT');
            $table->integer('IDTEUFEUR')->index('IDTEUFEUR');
            $table->integer('NOTE');
            $table->string('LIBELLEAVIS', 500);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Avis');
    }
}
