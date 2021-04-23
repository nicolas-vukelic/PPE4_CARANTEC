<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRServationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Réservation', function (Blueprint $table) {
            $table->foreign('IDTEUFEUR', 'Réservation_ibfk_4')->references('IDPER')->on('Teufeur')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDEVENT', 'Réservation_ibfk_5')->references('IDEVENT')->on('Event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Réservation', function (Blueprint $table) {
            $table->dropForeign('Réservation_ibfk_4');
            $table->dropForeign('Réservation_ibfk_5');
        });
    }
}
