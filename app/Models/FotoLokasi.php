<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoLokasi extends Model
{
    use HasFactory;

    protected $table = 'foto_lokasi';
    protected $fillable = ['foto', 'lokasi_id'];

    public function lokasi()
    {
        return $this->belongsTo('App\Models\Lokasi');
    }

}
