<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['noprod', 'nama', 'harga', 'gambar', 'pop', 'tiktok', 'shopee'];

    public function getHargaAttribute($value)
    {
        return (float) $value;
    }

}


