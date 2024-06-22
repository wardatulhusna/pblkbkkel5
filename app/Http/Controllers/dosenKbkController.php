<?php

namespace App\Http\Controllers;

use App\Models\dosenKbk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dosenKbkController extends Controller
{
    public function view()
    {
        $data = dosenKbk::all();
        return view('halamanAdmin.dosenkbk', ['dosenkbks' => $data] );
    }
}
