<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Reservation', function (Blueprint $table) {
            $table->foreign('IDTEUFEUR', 'Reservation_ibfk_4')->references('IDPER')->on('Teufeur')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDEVENT', 'Reservation_ibfk_5')->references('IDEVENT')->on('Event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Reservation', function (Blueprint $table) {
            $table->dropForeign('Reservation_ibfk_4');
            $table->dropForeign('Reservation_ibfk_5');
        });
    }
}
