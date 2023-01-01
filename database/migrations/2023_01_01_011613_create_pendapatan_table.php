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
        Schema::create('pendapatan', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('no_jurnal')->unique();
            $table->date('tgl_jurnal');
            $table->string('dokumen_sumber');
            $table->bigInteger('no_dokumen')->unique();
            $table->date('tgl_dokumen');
            $table->text('uraian');

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
        Schema::dropIfExists('pendapatan');
    }
};
