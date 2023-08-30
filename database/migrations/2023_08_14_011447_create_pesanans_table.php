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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nama_mempelai_laki');
            $table->string('nama_mempelai_perempuan');
            $table->string('Foto_Laki');
            $table->string('Foto_perempuan');
            $table->string('ayah_mempelai_perempuan');
            $table->string('ibu_mempelai_perempuan');
            $table->string('ayah_mempelai_Laki');
            $table->string('ibu_mempelai_Laki');
            $table->string('Judul_weeding');
            $table->string('Deskripsi_mempelai_pria');
            $table->string('Deskripsi_mempelai_wanita');
            $table->string('Alamat_resepsi');
            $table->date('Tanggal_akad_nikah');
            $table->date('Tanggal_Resepsi');
            $table->dateTime('jam_akad_nikah');
            $table->dateTime('jam_resepsi');
            $table->string('deskripsi_akad_nikah');
            $table->string('deskripsi_resepsi');
            $table->string('Cerita_kami');
            $table->string('Awal_pertama_bertemu');
            $table->date('tanggal_pertama_bertemu');
            $table->string('Foto_pertama_bertemu');
            $table->string('Mulai_serius');
            $table->date('Tanggal_mulai_serius');
            $table->string('Foto_mulai_serius');
            $table->string('Tunangan');
            $table->date('Tanggal_tunangan');
            $table->string('rekening_mempelai_pria');
            $table->string('rekening_mempelai_Wanita');
            $table->string('latlong_resepsi');
            $table->date('tanggal_terbit');
            $table->string('bukti_pembayaran')->default(0);
            $table->enum('status',['disetujui','ditolak'])->default(0);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
