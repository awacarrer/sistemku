<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{

    protected $table = "pelanggan";

    protected $fillable = [

        'nama', 'jenis_kelamin', 'alamat', 'telepon', 'email', 'foto'
    ];

    protected $hidden = [];
}
