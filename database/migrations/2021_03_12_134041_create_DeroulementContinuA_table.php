<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeroulementContinuATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DeroulementContinuA', function (Blueprint $table) {
            $table->date('DATE');
            $table->integer('IDLIEU')->index('IDLIEU');
            $table->integer('IDEVENT')->index('IDEVENT');
            $table->primary(['DATE', 'IDLIEU', 'IDEVENT']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('DeroulementContinuA');
    }
}
