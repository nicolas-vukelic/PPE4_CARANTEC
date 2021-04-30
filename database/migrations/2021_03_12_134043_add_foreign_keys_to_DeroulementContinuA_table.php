<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDeroulementContinuATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('DeroulementContinuA', function (Blueprint $table) {
            $table->foreign('IDEVENT', 'DeroulementContinuA_ibfk_1')->references('IDEVENT')->on('Atelier')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDLIEU', 'DeroulementContinuA_ibfk_2')->references('IDLIEU')->on('Lieux')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('DeroulementContinuA', function (Blueprint $table) {
            $table->dropForeign('DeroulementContinuA_ibfk_1');
            $table->dropForeign('DeroulementContinuA_ibfk_2');
        });
    }
}
