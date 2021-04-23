<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Artiste', function (Blueprint $table) {
            $table->integer('IDPER')->primary();
            $table->integer('IDDOMAINE')->index('IDDOMAINE');
            $table->string('SITEWEB', 100);
            $table->string('PAGEFB', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Artiste');
    }
}
