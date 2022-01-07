<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';
    protected $fillable = ['nama', 'deskripsi', 'lokasi', 'unit' , 'keterangan_id', 'user_id', 'alasan'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function keterangan()
    {
        return $this->belongsTo('App\Models\KeteranganLaporan');
    }
    public function foto()
    {
        return $this->hasMany('App\Models\FotoLaporan');
    }
    
}
