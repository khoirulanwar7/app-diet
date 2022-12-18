<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rencanas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('rencana_mingguan')->unsigned()->index()->nullable();
            $table->string('judul_rencana');
            $table->string('rencana');
            $table->string('deskripsi');
            $table->timestamps();
            $table->foreign('rencana_mingguan')->references('id')->on('kontens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rencanas');
    }
};
