<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori_berita');
            $table->foreign('id_kategori_berita')->references('id')->on('kat_berita')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('admins')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('judul_berita');
            $table->string('tanggal_berita');
            $table->string('isi_berita');
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
        Schema::dropIfExists('berita');
    }
}
