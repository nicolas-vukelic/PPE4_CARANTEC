<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeIntervenantsConfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_IntervenantsConf', function (Blueprint $table) {
            $table->integer('IDPER')->index('IDPER');
            $table->integer('IDEVENT')->index('IDEVENT');
            $table->primary(['IDPER', 'IDEVENT']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Liste_IntervenantsConf');
    }
}
