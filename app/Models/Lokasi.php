<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasi';
    protected $fillable = ['alamat','pin_lokasi'];

    public function produk()
    {
        return $this->belongsToMany('App\Models\Produk','lokasi_id','produk_id');
    }
    public function foto()
    {
        return $this->hasMany('App\Models\FotoLokasi');
    }
}
