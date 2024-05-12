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
        Schema::create('pinjaman_buku', function(Blueprint $table){
            $table->id();
            $table->string('code_buku', 20);
            $table->string('status_buku', 10);
            $table->unsignedBigInteger('id_peminjam');
            $table->unsignedBigInteger('id_buku');
            $table->foreign('id_peminjam')->references('id')->on('peminjam');
            $table->foreign('id_buku')->references('id')->on('buku');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
