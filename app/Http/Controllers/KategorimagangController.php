<?php

namespace App\Http\Controllers;

use App\Models\KategoriMagang;
use Illuminate\Http\Request;

class KategorimagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KategoriMagang = KategoriMagang::all();
        return view('Admin.kat-content.k_magang',compact('KategoriMagang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.kat-content.show.create_k_magang');
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
            'kategori_magang' => 'required'
        ]);
        KategoriMagang::create([
            'kategori_magang' => $request->kategori_magang
        ]);
        return redirect('/admin/kategori-magang')->with('status','Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KategoriMagang  $kategoriMagang
     * @return \Illuminate\Http\Response
     */
    public function show(KategoriMagang $KategoriMagang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KategoriMagang  $kategoriMagang
     * @return \Illuminate\Http\Response
     */
    public function edit(KategoriMagang $KategoriMagang)
    {
        return view('Admin.kat-content.show.edit_k_magang',compact('KategoriMagang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KategoriMagang  $kategoriMagang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KategoriMagang $KategoriMagang)
    {
        $request->validate([
            'kategori_magang'=>'required'
        ]);
        KategoriMagang::where('id', $KategoriMagang->id)->update([
            'kategori_magang'=>$request->kategori_magang
        ]);
        return redirect('/admin/kategori-magang')->with('status','Data Berhasi di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KategoriMagang  $kategoriMagang
     * @return \Illuminate\Http\Response
     */
    public function destroy(KategoriMagang $KategoriMagang)
    {
        Kategorimagang::destroy($KategoriMagang->id);
        return redirect('admin/kategori-magang')->with('delete','Data Berhasil Dihapus');
    }
}
