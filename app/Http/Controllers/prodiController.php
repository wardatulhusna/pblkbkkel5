<?php

namespace App\Http\Controllers;

use App\Models\prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class prodiController extends Controller
{

    public function view()
    {
        // $query=DB::table('prodis')->get();
        // return view('halamanAdmin.prodi', ['prodis'=>$query]);
        $data = prodi::all();
        return view('halamanAdmin.prodi',['prodis'=>$data]);
    }
    public function filter(Request $request)
    {
        $nama_prodi = $request->get('nama_prodi');

        // Query data prodi berdasarkan nama_prodi
        $prodis = Prodi::where('nama_prodi', 'like', "%{$nama_prodi}%")->paginate(10); // Contoh filter, sesuaikan dengan model Anda

        return view('halamanAdmin.prodi', compact('prodis'));
    }
}
