<?php

namespace App\Http\Controllers;

use App\Models\dosenMatkul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dosenMatkulController extends Controller
{
    public function view()
    {
        $data = dosenMatkul::all();
        return view('halamanAdmin.dosenmatkul', ['dosenmatkuls' => $data] );
    }

}
