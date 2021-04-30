<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Reservation', function (Blueprint $table) {
            $table->integer('IDEVENT');
            $table->integer('IDTEUFEUR')->index('IDTEUFEUR');
            $table->date('DATE')->default('CURRENT_TIMESTAMP');
            $table->integer('NBPLACES');
            $table->integer('COUTTOTAL');
            $table->primary(['IDEVENT', 'IDTEUFEUR', 'DATE']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Reservation');
    }
}
