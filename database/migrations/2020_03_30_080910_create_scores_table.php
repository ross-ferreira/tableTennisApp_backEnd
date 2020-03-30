<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer("round");
            $table->bigInteger("player1_id")->unsigned();
            $table->integer("scoreP1");
            $table->string("resultP1");
            $table->bigInteger("player2_id")->unsigned();
            $table->integer("scoreP2");
            $table->string("resultP2");
            $table->timestamps();

            $table->foreign("player1_id")->references("id")->on("players")->onDelete("cascade");
            $table->foreign("player2_id")->references("id")->on("players")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
