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
        Schema::create('kondisi', function (Blueprint $table) {
            $table->integer('id_kondisi', true);
            $table->integer('id_super_admin');
            $table->integer('id_pengembalian_mobil');
            $table->string('lampu', 30);
            $table->string('dongkrak_kit', 30);
            $table->string('klakson', 30);
            $table->string('head_rest', 30);
            $table->string('kebersihan_mobil', 30);
            $table->string('sea_belt', 30);
            $table->string('audio', 30);
            $table->string('kartet', 30);
            $table->string('ban_serep', 30);
            $table->string('stnk', 30);
            $table->text('foto_kondisi_mobil');

            // Foreign Key

            $table->foreign('id_super_admin')->on('super_admin')
                ->references('id_super_admin')->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('id_pengembalian_mobil')->on('pengembalian_mobil')
                ->references('id_pengembalian_mobil')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisi');
    }
};
