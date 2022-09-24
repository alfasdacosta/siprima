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
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->text("keperluan");
            $table->string("tempat_tujuan");
            $table->dateTime("rencana_kembali");
            $table->dateTime("waktu_keluar");
            $table->string("lokasi_keluar");
            $table->dateTime("waktu_kembali");
            $table->string("lokasi_kembali");            
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
        Schema::dropIfExists('presensis');
    }
};
