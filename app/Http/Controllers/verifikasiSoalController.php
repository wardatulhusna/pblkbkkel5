<?php

namespace App\Http\Controllers;

use App\Models\verifikasiSoal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class verifikasiSoalController extends Controller
{
    public function view()
    {
        $data = verifikasiSoal::all();
        return view('halamanAdmin.verifikasisoal', ['verifikasirpss' => $data] );
    }
}
