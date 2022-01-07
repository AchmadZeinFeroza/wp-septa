<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';
    protected $fillable = ['nama','no_wa', 'no_telpon', 'email', 'link_wa', 'link_shopee', 'link_tokopedia', 'link_fb', 'deskripsi', 'maps'];
}
