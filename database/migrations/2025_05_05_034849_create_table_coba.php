<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('perbaikans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('teknisi_id')->nullable()->constrained('users')->onDelete('set null');
            $table->string('nama_barang');
            $table->text('kerusakan');
            $table->enum('tipe_layanan', ['antar_lokasi', 'panggil_teknisi']);
            $table->string('alamat_penjemputan')->nullable();
            $table->integer('biaya')->nullable();
            $table->enum('status', ['diajukan', 'diproses', 'selesai', 'dibatalkan'])->default('diajukan');
            $table->enum('status_pembayaran', ['belum_dibayar', 'sudah_dibayar'])->default('belum_dibayar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('perbaikans');
    }
};
