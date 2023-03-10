<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $fillable = ["id_pembeli", "tgl_transaksi", "total_transaksi"];

    public function pembeli()
    {
        return $this->belongsTo(pembeli::class, "id_pembeli");
    }

    public function detail_penjualan()
    {
        return $this->hasMany(detail_penjualan::class, "id_penjualan");
    }
}
