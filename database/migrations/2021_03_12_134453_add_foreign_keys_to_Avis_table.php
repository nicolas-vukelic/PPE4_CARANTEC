<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Avis', function (Blueprint $table) {
            $table->foreign('IDTEUFEUR', 'Avis_ibfk_2')->references('IDPER')->on('Teufeur')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDEVENT', 'Avis_ibfk_3')->references('IDEVENT')->on('Event')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Avis', function (Blueprint $table) {
            $table->dropForeign('Avis_ibfk_2');
            $table->dropForeign('Avis_ibfk_3');
        });
    }
}
