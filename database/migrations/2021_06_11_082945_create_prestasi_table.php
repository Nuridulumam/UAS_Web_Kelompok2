<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori_prestasi');
            $table->foreign('id_kategori_prestasi')->references('id')->on('kat_prestasi')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('admins')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('judul_prestasi');
            $table->string('tanggal_prestasi');
            $table->string('deskripsi');
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
        Schema::dropIfExists('prestasi');
    }
}
