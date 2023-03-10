<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $fillable = ["id_supplier", "tgl_transaksi", "total_transaksi"];

    public function supplier()
    {
        return $this->belongsTo(supplier::class, "id_supplier");
    }

    public function detail_pembelian()
    {
        return $this->hasMany(detail_pembelian::class, "id_pembelian");
    }
}
