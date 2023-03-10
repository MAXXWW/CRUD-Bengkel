<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = ["nama", "id_kategori", "stok", "harga"];

    public function kategori()
    {
        return $this->belongsTo(kategori::class, "id_kategori");
    }

    public function detail_penjualan()
    {
        return $this->belongsTo(detail_penjualan::class, "id_barang");
    }

    public function detail_pembelian()
    {
        return $this->belongsTo(detail_pembelian::class, "id_barang");
    }
}
