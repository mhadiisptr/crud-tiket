<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = "tiket";

    protected $fillable = ['kode_tiket', 'judul_film', 'kategori_film', 'nomor_kursi', 'jumlah_tiket', 'harga'];
}
