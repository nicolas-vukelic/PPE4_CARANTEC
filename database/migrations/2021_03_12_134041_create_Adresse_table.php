<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdresseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Adresse', function (Blueprint $table) {
            $table->integer('IDADRESSE', true);
            $table->string('NUM', 50);
            $table->string('NOMRUE', 500);
            $table->string('VILLE', 500);
            $table->string('REGION', 50);
            $table->string('DEPARTEMENT', 50);
            $table->string('LIEUDIT', 500);
            $table->string('CODEPOSTAL', 8);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Adresse');
    }
}
