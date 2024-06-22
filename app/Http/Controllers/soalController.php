<?php

namespace App\Http\Controllers;

use App\Models\soal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class soalController extends Controller
{
    public function view()
    {
        $data = soal::all();
        return view('halamanAdmin.soal', ['soals' => $data] );
    }
}
