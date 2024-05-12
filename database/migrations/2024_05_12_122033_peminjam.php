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
        Schema::create('peminjam', function(Blueprint $table){
            $table->id();
            $table->string('nama_peminjam', 50);
            $table->string('no_wa', 13);
            $table->string('status_peminjam', 10);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
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
