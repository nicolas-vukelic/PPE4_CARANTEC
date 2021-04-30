<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Event', function (Blueprint $table) {
            $table->foreign('IDPUBCIBLE', 'Event_ibfk_2')->references('IDPUBCIBLE')->on('PublicCible')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDLIEU', 'Event_ibfk_3')->references('IDLIEU')->on('Lieux')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDTARIF', 'Event_ibfk_4')->references('IDTARIF')->on('Tarifs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDSESSION', 'Event_ibfk_5')->references('IDSESSION')->on('Session')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Event', function (Blueprint $table) {
            $table->dropForeign('Event_ibfk_2');
            $table->dropForeign('Event_ibfk_3');
            $table->dropForeign('Event_ibfk_4');
            $table->dropForeign('Event_ibfk_5');
        });
    }
}
