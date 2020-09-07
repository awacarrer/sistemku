<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusPengiriman extends Model
{

    protected $table = "status_pengiriman";

    protected $fillable = [

        'nama_pengiriman', 'lacak', 'waktu', 'destinasi'
    ];

    protected $hidden = [];
}
