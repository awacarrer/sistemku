<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackingArea extends Model
{

    protected $table = "tracking_area";

    protected $fillable = [

        'resi', 'email', 'telepon', 'kota_asal', 'kota_tujuan', 'alamat'
    ];

    protected $hidden = [];
}
