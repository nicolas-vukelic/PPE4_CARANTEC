<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAtelierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Atelier', function (Blueprint $table) {
            $table->foreign('IDEVENT', 'Atelier_ibfk_1')->references('IDEVENT')->on('Event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Atelier', function (Blueprint $table) {
            $table->dropForeign('Atelier_ibfk_1');
        });
    }
}
