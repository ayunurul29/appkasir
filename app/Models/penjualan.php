<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'penjualan_id',
        'tgl_penjualan',
        'total_harga',
        'pelanggan_id',
    ];

    protected $with = ['pelanggan'];
    
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
    public function penjualan()
    {
        return $this->belongsTo(Penjualan::class);
    }
    public function Detail(){
        return $this->hasMany(Detail::class);
    }
}
