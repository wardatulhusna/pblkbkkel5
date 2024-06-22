<?php

namespace App\Http\Controllers;

use App\Models\rpsMatkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rpsMatkulController extends Controller
{
    public function view()
    {
        $data = rpsMatkul::all();
        return view('halamanAdmin.rps', ['rpss' => $data] );
    }
}
