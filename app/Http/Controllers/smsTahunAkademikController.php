<?php

namespace App\Http\Controllers;

use App\Models\smsTahunAkademik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class smsTahunAkademikController extends Controller
{
    public function view()
    {
        $query = DB::table('smstahunakademiks')->get();
        return view('halamanAdmin.tahunAkademik', ['smstahunakademiks' => $query]);
    }
}
