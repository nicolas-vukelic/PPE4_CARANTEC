<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLieuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lieux', function (Blueprint $table) {
            $table->integer('IDLIEU')->primary();
            $table->string('NOM', 50);
            $table->string('DESCRIPTIF', 500);
            $table->integer('IDADRESSE')->index('IDADRESSE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Lieux');
    }
}
