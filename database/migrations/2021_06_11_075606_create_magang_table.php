<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori_magang');
            $table->foreign('id_kategori_magang')->references('id')->on('kat_magang')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('admins')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('judul_magang');
            $table->string('tanggal_magang');
            $table->string('deskripsi');
            $table->string('image');
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
        Schema::dropIfExists('magang');
    }
}
