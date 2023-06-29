<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = session('role');
        if ($role != 'admin') {
            return redirect('login');
        }

        $data = [
            'status' => 'home',
            'data' => Admin::all()
        ];
        return view('admin.dashboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = session('role');
        if ($role != 'admin') {
            return redirect('login');
        }

        $data = [
            'status' => 'create'
        ];
        return view('admin.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
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

        return redirect('dashboard')->with('pesan', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {
        $role = session('role');
        if ($role != 'admin') {
            return redirect('login');
        }

        $data = [
            'status' => 'detail',
            'data' => Admin::where('id_pendaftaran', $id)->first()
        ];
        return view('admin.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = session('role');
        if ($role != 'admin') {
            return redirect('login');
        }

        $data = [
            'status' => 'edit',
            'data' => Admin::where('id_pendaftaran', $id)->first()
        ];
        return view('admin.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'id_pendaftaran' => 'required',
            'tgl_daftar' => 'required',
            'th_ajaran' => 'required',
            'jurusan' => 'required',
            'nm_peserta' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' =>  'required',
            'jk' => 'required',
            'agama' => 'required',
            'almt_peserta' => 'required'
        ]);

        $resource = Admin::findOrFail($id);
        $resource->update($validateData);

        return redirect('dashboard')->with('pesan', 'Data user berhasil diubah');
    }

    public function laporan()
    {
        $data = [
            'status' => 'home',
            'data' => Admin::all()
        ];
        return view('admin.laporan', $data);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::where('id_pendaftaran', $id)->delete();
        return redirect('dashboard')->with('pesan', 'Data berhasil dihapus');
    }
}
