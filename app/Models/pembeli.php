<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    protected $fillable = ["nama", "alamat", "telepon", "tanggal_lahir", "email", "password", "foto"];

    public function penjualan()
    {
        return $this->hasMany(penjualan::class, "id_pembeli");
    }
}
