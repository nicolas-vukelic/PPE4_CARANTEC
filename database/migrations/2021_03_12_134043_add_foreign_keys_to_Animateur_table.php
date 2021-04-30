<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAnimateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Animateur', function (Blueprint $table) {
            $table->foreign('IDPER', 'Animateur_ibfk_1')->references('IDPER')->on('Personne')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Animateur', function (Blueprint $table) {
            $table->dropForeign('Animateur_ibfk_1');
        });
    }
}
