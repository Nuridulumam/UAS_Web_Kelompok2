<?php

namespace App\Http\Controllers;

use App\Models\Magang;
use App\Models\Admin;
use App\Models\KategoriMagang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Magang = Magang::all();

        return view('Admin.konten.kn_magang', compact('Magang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Admin = Admin::all();
        $KategoriMagang = KategoriMagang::all();
        return view('Admin.konten.show.create_kn_magang', compact('KategoriMagang', 'Admin'));
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
            'judul_magang' => 'required',
            'tanggal_magang' => 'required',
            'id_admin' => 'required',
            'deskripsi' => 'required',
            'id_kategori_magang' => 'required'
        ]);
        $imageName = time().'.'.$request->image->extension();
        Magang::create([
            'judul_magang' => $request->judul_magang,
            'tanggal_magang' => $request->tanggal_magang,
            'id_admin' => $request->id_admin,
            'deskripsi' => $request->deskripsi,
            'id_kategori_magang' => $request->id_kategori_magang,
            'image' => $request->image->move('images', $imageName)
        ]);
        return redirect('/admin/konten-magang')->with('status', 'Data Berita Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function show(Magang $Magang)
    {
        return view('Admin.konten.show.magang', compact('Magang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function edit(Magang $Magang)
    {
        $KategoriMagang = KategoriMagang::all();
        $Admin = Admin::all();
        return view('Admin.konten.show.edit_kn_magang', compact('Magang', 'Admin', 'KategoriMagang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magang $Magang)
    {
        $request->validate([
            'judul_magang' => 'required',
            'tanggal_magang' => 'required',
            'id_admin' => 'required',
            'deskripsi' => 'required',
            'id_kategori_magang' => 'required'
        ]);
        Magang::where('id', $Magang->id)
        ->update([
            'id_kategori_magang' => $request->id_kategori_magang,
            'id_admin' => $request->id_admin,
            'judul_magang' => $request->judul_magang,
            'tanggal_magang' => $request->tanggal_magang,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/admin/konten-magang')->with('status', 'Data Magang Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magang  $magang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magang $Magang)
    {
        Magang::destroy($Magang->id);
        return redirect('/admin/konten-magang')->with('delete', 'Data Magang Berhasil Dihapus!');
    }
}
