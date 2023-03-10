<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $fillable = ["nama", "alamat", "telepon"];

    public function pembelian()
    {
        return $this->hasMany(pembelian::class, "id_supplier");
    }
}
