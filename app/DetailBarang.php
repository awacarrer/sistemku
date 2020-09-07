<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{

    protected $table = "detail_barang";

    protected $fillable = [

        'no_pengiriman', 'biaya', 'nama_barang', 'berat_barang'
    ];

    protected $hidden = [];
}
