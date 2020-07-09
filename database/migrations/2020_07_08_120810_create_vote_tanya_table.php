<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoteTanyaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vote_tanya', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('pertanyaan_id')->constrained('pertanyaan');
            $table->smallInteger('value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vote_tanya');
    }
}
