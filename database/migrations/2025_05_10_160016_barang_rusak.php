<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
    Schema::create('barang_rusak', function (Blueprint $table) {
    $table->id();
    $table->foreignId('perbaikan_id')->constrained('perbaikans')->onDelete('cascade');
    $table->string('nama_barang');
    $table->text('kerusakan');
    $table->enum('tipe_layanan', ['panggil_teknisi']);
    $table->string('alamat_penjemputan')->nullable();
});

    }
    
    public function down(): void
    {
        Schema::dropIfExists('barang_rusak');
        
    }
};
