<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->integer("round");
            // $table->bigInteger("player_id")->unsigned();
            // $table->foreign("player_id")->references("id")->on("players")->onDelete("cascade");
            $table->integer("scoreP1");
            $table->string("resultP1");
            $table->integer("scoreP2");
            $table->string("resultP2");
            $table->timestamps();

            // Schema::table('results', function($table) {
            //     $table->foreign("player_id")->references("id")->on("players")->onDelete("cascade");
            // });


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');

    }
}
