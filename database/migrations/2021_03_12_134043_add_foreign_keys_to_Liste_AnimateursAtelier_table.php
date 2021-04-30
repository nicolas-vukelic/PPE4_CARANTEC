<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToListeAnimateursAtelierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Liste_AnimateursAtelier', function (Blueprint $table) {
            $table->foreign('IDEVENT', 'Liste_AnimateursAtelier_ibfk_1')->references('IDEVENT')->on('Atelier')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('IDPER', 'Liste_AnimateursAtelier_ibfk_2')->references('IDPER')->on('Animateur')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Liste_AnimateursAtelier', function (Blueprint $table) {
            $table->dropForeign('Liste_AnimateursAtelier_ibfk_1');
            $table->dropForeign('Liste_AnimateursAtelier_ibfk_2');
        });
    }
}
