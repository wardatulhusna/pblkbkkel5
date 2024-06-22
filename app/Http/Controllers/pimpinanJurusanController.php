<?php

namespace App\Http\Controllers;

use App\Models\pimpinanJurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pimpinanJurusanController extends Controller
{
    public function view()
    {
        $data = pimpinanJurusan::all();
        return view('halamanAdmin.pimpinanJurusan', ['pimpinanjurusans' => $data] );
    }
}
