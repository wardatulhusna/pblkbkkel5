<?php

namespace App\Http\Controllers;

use App\Models\dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dosenController extends Controller
{
    public function view()
    {
        $data = dosen::all();
        return view('halamanAdmin.dosen',['data'=>$data]);
    }
}
