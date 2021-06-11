<?php

namespace App\Http\Controllers;

use App\Models\KategoriPrestasi;
use Illuminate\Http\Request;

class KategoriprestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoriPrestasi = KategoriPrestasi::all();
        return view('Admin.kat-content.k_prestasi',compact('kategoriPrestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.kat-content.show.create_k_prestasi');
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
            'kategori_prestasi' => 'required'
        ]);
        KategoriPrestasi::create([
            'kategori_prestasi' => $request->kategori_prestasi
        ]);
        return redirect('/admin/kategori-prestasi')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriPrestasi  $kategoriPrestasi
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriPrestasi $kategoriPrestasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriPrestasi  $kategoriPrestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriPrestasi $kategoriPrestasi)
    {
        return view('Admin.kat-content.show.edit_k_prestasi',compact('kategoriPrestasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriPrestasi  $kategoriPrestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriPrestasi $kategoriPrestasi)
    {
        $request->validate([
            'kategori_prestasi'=>'required'
        ]);
        KategoriPrestasi::where('id', $kategoriPrestasi->id)->update([
            'kategori_prestasi'=>$request->kategori_prestasi
        ]);
        return redirect('/admin/kategori-prestasi')->with('status','Data Berhasi di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriPrestasi  $kategoriPrestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriPrestasi $kategoriPrestasi)
    {
        KategoriPrestasi::destroy($kategoriPrestasi->id);
        return redirect('admin/kategori-berita')->with('delete','Data Berhasil Dihapus');//
    }
}
