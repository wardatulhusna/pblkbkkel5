<?php

namespace App\Http\Controllers;

use App\Models\kbk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class kbkController extends Controller
{
    public function view()
    {
        $data = kbk::all();
        return view('halamanAdmin.kbk', ['kbks' => $data] );
    }
}
