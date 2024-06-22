<?php

namespace App\Http\Controllers;

use App\Models\kurikulum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kurikulumController extends Controller
{
    public function view()
    {
        $data = kurikulum::all();
        return view('halamanAdmin.kurikulum',['kurikulums'=>$data]);
    }
}
