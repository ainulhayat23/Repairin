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

    Schema::create('keahlian_teknisi', function (Blueprint $table) {
    $table->id();
    $table->foreignId('teknisi_id')->constrained('users')->onDelete('cascade');
    $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade');
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keahlian_teknisi');
    }
};
