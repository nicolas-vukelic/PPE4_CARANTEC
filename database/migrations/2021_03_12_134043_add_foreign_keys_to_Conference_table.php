<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToConferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Conference', function (Blueprint $table) {
            $table->foreign('IDEVENT', 'Conference_ibfk_1')->references('IDEVENT')->on('Event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDANIMATEUR', 'Conference_ibfk_2')->references('IDPER')->on('Animateur')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Conference', function (Blueprint $table) {
            $table->dropForeign('Conference_ibfk_1');
            $table->dropForeign('Conference_ibfk_2');
        });
    }
}
