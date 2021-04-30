<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToIntervenantSpeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('IntervenantSpe', function (Blueprint $table) {
            $table->foreign('IDPER', 'IntervenantSpe_ibfk_1')->references('IDPER')->on('Personne')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('IntervenantSpe', function (Blueprint $table) {
            $table->dropForeign('IntervenantSpe_ibfk_1');
        });
    }
}
