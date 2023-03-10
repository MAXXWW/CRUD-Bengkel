<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pembelian extends Model
{
    use HasFactory;
    protected $fillable = ["id_pembelian", "id_barang", "jumlah", "total"];

    public function pembelian()
    {
        return $this->belongsTo(pembelian::class, "id_pembelian");
    }

    public function barang()
    {
        return $this->hasMany(barang::class, "id_barang");
    }
}
