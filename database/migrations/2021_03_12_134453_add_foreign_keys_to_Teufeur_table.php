<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTeufeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Teufeur', function (Blueprint $table) {
            $table->foreign('IDPER', 'Teufeur_ibfk_1')->references('IDPER')->on('Personne')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDADRESSE', 'Teufeur_ibfk_2')->references('IDADRESSE')->on('Adresse')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Teufeur', function (Blueprint $table) {
            $table->dropForeign('Teufeur_ibfk_1');
            $table->dropForeign('Teufeur_ibfk_2');
        });
    }
}
