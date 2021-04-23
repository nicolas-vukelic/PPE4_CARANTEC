<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToListeArtisteConcertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Liste_ArtisteConcert', function (Blueprint $table) {
            $table->foreign('IDPER', 'Liste_ArtisteConcert_ibfk_1')->references('IDPER')->on('Artiste')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDEVENT', 'Liste_ArtisteConcert_ibfk_2')->references('IDEVENT')->on('Concert')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Liste_ArtisteConcert', function (Blueprint $table) {
            $table->dropForeign('Liste_ArtisteConcert_ibfk_1');
            $table->dropForeign('Liste_ArtisteConcert_ibfk_2');
        });
    }
}
