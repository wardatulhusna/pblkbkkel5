<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jurusanController extends Controller
{
    public function view()
    {
        // $query=DB::table('jurusans')->get();
        // return view('halamanAdmin.jurusan',['jurusans'=>$query]);
        $data = jurusan::all();
        return view('halamanAdmin.jurusan', ['jurusans' => $data] );
    }
    public function create()
    {
        return view('halamanadmin.form.FormJurusan');
    }

    public function save(Request $request){
        $validation = $request->validate([
            'kode_jurusan' => 'required',
            'nama_jurusan' => 'required',

        ]);
        $data = jurusan::create($validation);
        if ($data) {
            session()->flash('success', 'jurusan berhasil ditambahkan');
            return view('halamanAdmin/jurusan');
        } else {
            session()->flash('error', 'Beberapa masalah terjadi');
            return redirect(route('jurusan/create'));
        }

    }




}
