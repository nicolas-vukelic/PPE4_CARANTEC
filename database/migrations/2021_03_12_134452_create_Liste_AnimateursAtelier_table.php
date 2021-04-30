<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListeAnimateursAtelierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Liste_AnimateursAtelier', function (Blueprint $table) {
            $table->integer('IDPER')->index('IDPER');
            $table->integer('IDEVENT')->index('IDEVENT');
            $table->primary(['IDPER', 'IDEVENT']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Liste_AnimateursAtelier');
    }
}
