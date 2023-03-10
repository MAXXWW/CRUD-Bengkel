<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_penjualan extends Model
{
    use HasFactory;
    protected $fillable = ["id_penjualan", "id_barang", "harga", "jumlah", "total"];

    public function penjualan()
    {
        return $this->belongsTo(penjualan::class, "id_penjualan");
    }

    public function barang()
    {
        return $this->hasMany(barang::class, "id_barang");
    }
}
