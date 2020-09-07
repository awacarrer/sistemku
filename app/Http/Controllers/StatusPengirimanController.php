<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class StatusPengirimanController extends Controller
{
    public function index(Request $request)
    {
        $items = StatusPengiriman::all();

        return view('pages.tracking_area');
    }
}
