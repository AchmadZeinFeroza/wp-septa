<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeteranganLaporan extends Model
{
    use HasFactory;

    protected $table = 'keterangan';
    protected $fillable = ['nama'];

    public function laporan()
    {
        return $this->hasMany('App\Models\Laporan');
    }

}
