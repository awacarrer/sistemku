<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class TrackingAreaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $user = auth()->user()->email;

        $trackings = DB::select("SELECT tracking_area.telepon, pengiriman_barang.tanggal_pengiriman, tracking_area.resi FROM users
        JOIN pengiriman_barang
        ON users.email = pengiriman_barang.email
        JOIN tracking_area
        ON users.email = tracking_area.email
        WHERE users.email = '$user' ");
        return view('pages.tracking_area', compact('trackings'));
    }
}
