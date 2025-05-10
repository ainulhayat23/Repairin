<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {

    Schema::create('hasil_perbaikans', function (Blueprint $table) {
    $table->id();
    $table->foreignId('perbaikan_id')->constrained('perbaikans')->onDelete('cascade');
    $table->integer('biaya');
    $table->text('catatan')->nullable();
    $table->dateTime('selesai_at');
});

    }

    public function down(): void
    {
        Schema::dropIfExists('hasil_perbaikans');
    }
};
