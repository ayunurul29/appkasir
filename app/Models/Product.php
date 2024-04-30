<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
    'product_id',
    'nama_product',
    'harga',
    'stok',
];
public function Detail(){
    return $this->hasMany(Detail::class);
}
}

