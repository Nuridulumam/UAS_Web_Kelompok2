<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengumumanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id')->on('admins')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('judul_pengumuman');
            $table->string('tanggal_pengumuman');
            $table->string('isi_pengumuman');
            $table->string('kategori');
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
        Schema::dropIfExists('pengumuman');
    }
}
