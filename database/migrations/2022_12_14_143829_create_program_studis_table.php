<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramStudisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_kursus', function (Blueprint $table) {
            $table->id();
            $table->string('id_kursus');
            $table->string('nama_kursus');
            $table->string('jenjang_kursus')->nullable();
            $table->string('foto_kursus')->nullable();
            $table->string('pengajar')->nullable();
            $table->string('jam')->nullable();
            $table->string('hari')->nullable();
            $table->string('contoh_game')->nullable();
            $table->string('harga_kursus')->nullable();
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
        Schema::dropIfExists('program_kursuss');
    }
}
