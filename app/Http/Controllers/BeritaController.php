<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Admin;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Berita = Berita::all();
        return view('Admin.konten.kn_berita', compact('Berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Berita $Berita)
    {
        $KategoriBerita = KategoriBerita::all();
        $Admin = Admin::all();
        return view('Admin.konten.show.create_kn_berita', compact('KategoriBerita', 'Admin'));
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
            'judul_berita' => 'required',
            'id_kategori_berita' => 'required',
            'id_admin' => 'required',
            'tanggal_berita' => 'required',
            'isi_berita' => 'required'
        ]);
        $imageName = time().'.'.$request->image->extension();
        Berita::create([
            'id_kategori_berita' => $request->id_kategori_berita,
            'id_admin' => $request->id_admin,
            'judul_berita' => $request->judul_berita,
            'tanggal_berita' => $request->tanggal_berita,
            'isi_berita' => $request->isi_berita,
            'image' => $request->image->move('images', $imageName)
        ]);
        return redirect('/admin/konten-berita')->with('status', 'Data Berita Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $Berita)
    {
        return view('Admin.konten.show.berita', compact('Berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $Berita)
    {
        $KategoriBerita = KategoriBerita::all();
        $Admin = Admin::all();
        return view('Admin.konten.show.edit_kn_berita', compact('Berita', 'KategoriBerita', 'Admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $Berita)
    {
        $request->validate([
            'judul_berita' => 'required',
            'id_kategori_berita' => 'required',
            'id_admin' => 'required',
            'tanggal_berita' => 'required',
            'isi_berita' => 'required'
        ]);
        Berita::where('id', $Berita->id)
        ->update([
            'id_kategori_berita' => $request->id_kategori_berita,
            'id_admin' => $request->id_admin,
            'judul_berita' => $request->judul_berita,
            'tanggal_berita' => $request->tanggal_berita,
            'isi_berita' => $request->isi_berita
        ]);
        return redirect('/admin/konten-berita')->with('status', 'Data Berita Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $Berita)
    {
        Berita::destroy($Berita->id);
        return redirect('/admin/konten-berita')->with('delete', 'Data Berita Berhasil Dihapus!');
    }
}
