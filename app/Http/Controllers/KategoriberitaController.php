<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class KategoriberitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KategoriBerita = KategoriBerita::all();
        return view('Admin.kat-content.k_berita',compact('KategoriBerita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.kat-content.show.create_k_berita');
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
            'kategori_berita' => 'required'
        ]);
        KategoriBerita::create([
            'kategori_berita' => $request->kategori_berita
        ]);
        return redirect('/admin/kategori-berita')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $KategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriBerita $KategoriBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriBerita  $KategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriBerita $KategoriBerita)
    {
        return view('Admin.kat-content.show.edit_k_berita',compact('KategoriBerita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriBerita  $KategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriBerita $KategoriBerita)
    {
        $request->validate([
            'kategori_berita'=>'required'
        ]);
        KategoriBerita::where('id', $KategoriBerita->id)->update([
            'kategori_berita'=>$request->kategori_berita
        ]);
        return redirect('/admin/kategori-berita')->with('status','Data Berhasi di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriBerita  $KategoriBerita
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriBerita $KategoriBerita)
    {
        KategoriBerita::destroy($KategoriBerita->id);
        return redirect('admin/kategori-berita')->with('delete','Data Berhasil Dihapus');
    }
}
