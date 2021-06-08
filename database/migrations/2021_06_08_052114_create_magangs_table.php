<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMagangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magangs', function (Blueprint $table) {
            $table->id('id_magang');
            $table->String('judul_magang');
            $table->timestamp('tanggal_magang');
            $table->text('deskripsi');
            $table->String('kategori');
            $table->unsignedInteger('upload_by');
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent();
            $table->foreign('upload_by')->references('id_admin')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('magangs');
    }
}
