<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesan';
    protected $fillable = ['email','nama', 'no_telpon','no_wa','alamat', 'rumah','furniture','quantity', 'harga','lokasi','status_id', 'pesan', 'kategori'];

    public function status()
    {
        return $this->belongsTo('App\Models\Status');
    }
}
