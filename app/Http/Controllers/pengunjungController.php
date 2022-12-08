<?php

namespace App\Http\Controllers;

use App\Models\Pengunjung;

use Illuminate\Http\Request;


class pengunjungController extends Controller
{
    public function index() {
        return view('pengunjung.all', ['data_pengunjung' => Pengunjung::all() ]);
    }

    public function show(Pengunjung $pengunjung)
    {
        return view('pengunjung.detail', ['pengunjung' => $pengunjung]);
    }

    public function destroy(Pengunjung $pengunjung)
    {
        Pengunjung::destroy($pengunjung->id);
        return redirect('/pengunjung/all')->with('success', 'Data Berhasil Dihapus!');
    }
}
