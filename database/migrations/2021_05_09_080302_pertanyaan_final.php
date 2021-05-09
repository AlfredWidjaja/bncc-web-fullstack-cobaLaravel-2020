<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PertanyaanFinal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan_final', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('tag_id');
            $table->foreignId('jawaban_id')->nullable();
            $table->string('judul');
            $table->string('isi');
            $table->unsignedBigInteger('vote');
            $table->string('jawaban_terbaik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan_final');
    }
}
