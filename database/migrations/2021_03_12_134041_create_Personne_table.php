<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Personne', function (Blueprint $table) {
            $table->integer('IDPER', true);
            $table->string('NOM', 50);
            $table->string('PRENOM', 50);
            $table->integer('TELEPHONE');
            $table->string('EMAIL', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Personne');
    }
}
