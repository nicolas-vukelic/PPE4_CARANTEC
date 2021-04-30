<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToArtisteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Artiste', function (Blueprint $table) {
            $table->foreign('IDPER', 'Artiste_ibfk_1')->references('IDPER')->on('Personne')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDDOMAINE', 'Artiste_ibfk_2')->references('IDDOMAINE')->on('DomaineArt')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Artiste', function (Blueprint $table) {
            $table->dropForeign('Artiste_ibfk_1');
            $table->dropForeign('Artiste_ibfk_2');
        });
    }
}
