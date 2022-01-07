<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['nama', 'deskripsi','jenis'];

    public function rumah()
    {
        return $this->hasMany('App\Models\Rumah');
    }
    public function furniture()
    {
        return $this->hasMany('App\Models\Furniture');
    }
    public function gambar()
    {
        return $this->hasMany('App\Models\Gambar');
        
    }
    public function lokasi()
    {
        return $this->belongsToMany('App\Models\Lokasi', 'produk_id','lokasi_id');
    }
    public function harga(){
        return $this->hasMany('App\Models\Harga');
    }
}
