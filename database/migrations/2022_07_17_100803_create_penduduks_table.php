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
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->char('nik',22)->unique();
            $table->string('nama',50);
            $table->char('jenis_kelamin',1);
            $table->date('tanggal_lahir');
            $table->foreignId('agama_id');
            $table->foreignId('status_kawin_id');
            $table->string('alamat');
            $table->string('telp');
            $table->foreignId('kelurahan_id');
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
        Schema::dropIfExists('penduduks');
    }
};
