<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    use HasFactory;

    protected $table = 'jenis';
    protected $fillable = ['nama','kategori_id'];

    public function kategori()
    {
        return $this->belongsTo('App\Models\Kategori');
    }
    public function furniture()
    {
        return $this->hasMany('App\Models\Furniture');
    }
}
