<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('pertanyaan_new', function (Blueprint $table) {
             $table->id();
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
         Schema::dropIfExists('pertanyaan');
     }
}
