<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLieuxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Lieux', function (Blueprint $table) {
            $table->foreign('IDADRESSE', 'Lieux_ibfk_1')->references('IDADRESSE')->on('Adresse')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Lieux', function (Blueprint $table) {
            $table->dropForeign('Lieux_ibfk_1');
        });
    }
}
