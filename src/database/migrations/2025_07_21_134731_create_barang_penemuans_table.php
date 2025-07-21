<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration // Baris 18: syntax error, unexpected token "return"
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang_penemuans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor');
            $table->string('jenis_barang');
            $table->string('lokasi');
            $table->text('ciri_ciri');
            $table->enum('status', ['Dilaporkan', 'Diambil'])->default('Dilaporkan');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_penemuans');
    }
};