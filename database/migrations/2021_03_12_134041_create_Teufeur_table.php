<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeufeurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Teufeur', function (Blueprint $table) {
            $table->integer('IDPER')->primary();
            $table->integer('IDADRESSE')->index('IDADRESSE');
            $table->string('LOGIN', 25);
            $table->string('MDP', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Teufeur');
    }
}
