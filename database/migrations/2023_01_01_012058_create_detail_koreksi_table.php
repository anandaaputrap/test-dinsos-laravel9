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
        Schema::create('detail_koreksi', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('kode_subkegiatan');
            $table->string('nama_subkegiatan');
            $table->bigInteger('kode_subrinci');
            $table->string('nama_subrinci');
            $table->string('kode', 1);
            $table->float('nominal');

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
        Schema::dropIfExists('detail_koreksi');
    }
};
