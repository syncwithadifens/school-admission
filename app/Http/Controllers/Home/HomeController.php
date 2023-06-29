<?php

namespace App\Http\Controllers\Home;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function formulir()
    {

        return view('home.formulir');
    }

    public function store(Request $request)
    {
        $getMaxId = Admin::select(DB::raw("MAX(RIGHT(id_pendaftaran, 5)) AS id"))->first();
        $d = $getMaxId->id;
        $generateId = 'P' . date('Y') . sprintf("%05s", $d + 1);

        $validateData = $request->validate([
            'th_ajaran' => 'required',
            'jurusan' => 'required',
            'nm_peserta' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' =>  'required',
            'jk' => 'required',
            'agama' => 'required',
            'almt_peserta' => 'required'
        ]);

        $validateData['id_pendaftaran'] = $generateId;
        $validateData['tgl_daftar'] = date('Y-m-d');

        Admin::create($validateData);
        return redirect('bukti')->with('data', $validateData);
    }

    public function bukti()
    {
        $received = session('data');
        return view('home.bukti', ['data' => $received]);
    }
}
