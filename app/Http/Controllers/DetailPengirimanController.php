<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailPengirimanController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.detail_pengiriman');
    }
}
