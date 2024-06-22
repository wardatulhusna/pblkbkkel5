<?php

namespace App\Http\Controllers;

use App\Models\pengurusKbk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengurusKbkController extends Controller
{
    public function view()
    {
    $data = pengurusKbk::all();
    return view('halamanAdmin.penguruskbk', ['penguruskbks' => $data] );
    }
}
