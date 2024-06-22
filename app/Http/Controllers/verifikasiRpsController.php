<?php

namespace App\Http\Controllers;

use App\Models\verifikasiRps;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class verifikasiRpsController extends Controller
{
    public function view()
    {
        $data = verifikasiRps::all();
        return view('halamanAdmin.verifikasirps', ['verifikasirpss' => $data] );
    }
}
