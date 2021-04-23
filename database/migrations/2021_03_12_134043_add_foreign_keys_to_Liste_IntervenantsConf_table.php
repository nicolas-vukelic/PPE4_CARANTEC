<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToListeIntervenantsConfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Liste_IntervenantsConf', function (Blueprint $table) {
            $table->foreign('IDEVENT', 'Liste_IntervenantsConf_ibfk_1')->references('IDEVENT')->on('Conference')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDPER', 'Liste_IntervenantsConf_ibfk_2')->references('IDPER')->on('IntervenantSpe')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Liste_IntervenantsConf', function (Blueprint $table) {
            $table->dropForeign('Liste_IntervenantsConf_ibfk_1');
            $table->dropForeign('Liste_IntervenantsConf_ibfk_2');
        });
    }
}
