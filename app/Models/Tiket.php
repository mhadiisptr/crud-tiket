<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $table = "tiket";

    protected $fillable = ['kode_tiket', 'judul_film', 'id_kategori', 'nomor_kursi', 'jumlah_tiket', 'harga'];

    public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}
