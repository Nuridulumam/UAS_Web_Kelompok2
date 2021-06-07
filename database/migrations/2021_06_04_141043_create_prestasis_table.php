<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->unsignedInteger('nim');
            $table->integerIncrements('id_prestasi');
            $table->String('prestasi');
            $table->String('penyelenggara');
            $table->String('judul');
            $table->String('level');
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->useCurrent();
            $table->foreign('nim')->references('no_induk')->on('mahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestasis');
    }
}
