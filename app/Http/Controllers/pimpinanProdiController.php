<?php

namespace App\Http\Controllers;

use App\Models\pimpinanProdi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pimpinanProdiController extends Controller
{
    public function view()
    {
        $data = pimpinanProdi::all();
        return view('halamanAdmin.pimpinanProdi', ['pimpinanprodis' => $data] );
    }
}
