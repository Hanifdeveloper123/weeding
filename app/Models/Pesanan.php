<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table="pesanan";
    protected $fillable=[
        'user_id',
        'nama_mempelai_laki',
        'nama_mempelai_perempuan',
        'Foto_Laki',
        'Foto_perempuan',
        'ayah_mempelai_perempuan',
        'ibu_mempelai_perempuan',
        'ayah_mempelai_Laki',
        'ibu_mempelai_Laki',
        'Judul_weeding',
        'Deskripsi_mempelai_pria',
        'Deskripsi_mempelai_wanita',
        'Alamat_resepsi',
        'Tanggal_akad_nikah',
        'Tanggal_Resepsi',
        'jam_akad_nikah',
        'jam_resepsi',
        'deskripsi_akad_nikah',
        'deskripsi_resepsi',
        'Cerita_kami',
        'Awal_pertama_bertemu',
        'tanggal_pertama_bertemu',
        'Foto_pertama_bertemu',
        'Mulai_serius',
        'Tanggal_mulai_serius',
        'Foto_mulai_serius',
        'Tunangan',
        'Tanggal_tunangan',
         'rekening_mempelai_pria',
        'rekening_mempelai_Wanita',
        'latlong_resepsi',
        'tanggal_terbit',
        'bukti_pembayaran',
        'status'
    ];

    public function user(){
        return $this->belongsTo('\App\Models\User');
    }
}
