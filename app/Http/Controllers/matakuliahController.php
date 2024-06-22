<?php

namespace App\Http\Controllers;

use App\Models\matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class matakuliahController extends Controller
{
    public function view()
    {
        $data = matakuliah::all();
        return view('halamanAdmin.matakuliah', ['matakuliahs' => $data] );
    }
}
