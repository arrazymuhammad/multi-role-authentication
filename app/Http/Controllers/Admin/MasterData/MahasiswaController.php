<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('admin.master-data.mahasiswa.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.mahasiswa.create');
    }

    public function store()
    {
        Mahasiswa::create(request()->only('nim', 'nama'));

        return redirect('admin/master-data/mahasiswa');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('admin.master-data.mahasiswa.edit', $data);
    }
    public function update(Mahasiswa $mahasiswa)
    {
        $mahasiswa->nama = request('nama');
        $mahasiswa->nim = request('nim');
        $mahasiswa->password = request('password');
        $mahasiswa->save();

        return redirect('admin/master-data/mahasiswa');
    }
}
