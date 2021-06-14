<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use App\Models\Admin;
use App\Models\KategoriPrestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Prestasi = Prestasi::all();
        return view('Admin.konten.kn_prestasi', compact('Prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $KategoriPrestasi = KategoriPrestasi::all();
        $Admin = Admin::all();
        return view('Admin.konten.show.create_kn_prestasi', compact('KategoriPrestasi', 'Admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori_prestasi' => 'required',
            'id_admin' => 'required',
            'judul_prestasi' => 'required',
            'tanggal_prestasi' => 'required',
            'deskripsi' => 'required'
        ]);
        Prestasi::create([
            'id_kategori_prestasi' => $request->id_kategori_prestasi,
            'id_admin' => $request->id_admin,
            'judul_prestasi' => $request->judul_prestasi,
            'tanggal_prestasi' => $request->tanggal_prestasi,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/admin/konten-prestasi')->with('status', 'Data Prestasi Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $Prestasi)
    {
        return view('Admin.konten.show.prestasi', compact('Prestasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $Prestasi)
    {
        return view('Admin.konten.show.edit_kn_prestasi', compact('Prestasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $Prestasi)
    {
        $request->validate([
            'id_kategori_prestasi' => 'required',
            'id_admin' => 'required',
            'judul_prestasi' => 'required',
            'tanggal_prestasi' => 'required',
            'deskripsi' => 'required'
        ]);
        Prestasi::where('id', $Prestasi->id)
        ->update([
            'id_kategori_prestasi' => $request->id_kategori_prestasi,
            'id_admin' => $request->id_admin,
            'judul_prestasi' => $request->judul_prestasi,
            'tanggal_prestasi' => $request->tanggal_prestasi,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/admin/konten-prestasi')->with('status', 'Data Prestasi Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $Prestasi)
    {
        Prestasi::destroy($Prestasi->id);
        return redirect('/admin/konten-prestasi')->with('delete', 'Data Prestasi Berhasil Dihapus!');
    }
}
