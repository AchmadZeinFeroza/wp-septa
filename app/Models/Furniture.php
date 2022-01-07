<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Furniture extends Model
{
    use HasFactory;

    protected $table = 'furniture';
    protected $fillable = [ 'produk_id', 'jenis_id','harga','tokopedia', 'shopee', 'lazada', 'bukalapak'];

    public function produk()
    {
        return $this->belongsTo('App\Models\Produk');
    }
    public function jenis()
    {
        return $this->belongsTo('App\Models\Jenis');
    }
}
