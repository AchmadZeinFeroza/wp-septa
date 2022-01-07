<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotoLaporan extends Model
{
    use HasFactory;
    
    protected $table = 'foto';
    protected $fillable = ['foto', 'laporan_id'];

    public function laporan()
    {
        return $this->belongsTo('App\Models\Laporan');
    }

}
