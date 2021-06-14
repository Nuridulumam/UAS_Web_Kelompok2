<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Admin;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pengumuman = Pengumuman::all();
        return view('Admin.konten.kn_pengumuman', compact('Pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Admin = Admin::all();
        return view('Admin.konten.show.create_kn_pengumuman', compact('Admin'));
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
            'judul_pengumuman' => 'required',
            'id_admin' => 'required',
            'tanggal_pengumuman' => 'required',
            'isi_pengumuman' => 'required',
            'kategori' => 'required'
        ]);
        Pengumuman::create([
            'id_admin' => $request->id_admin,
            'judul_pengumuman' => $request->judul_pengumuman,
            'tanggal_pengumuman' => $request->tanggal_pengumuman,
            'isi_pengumuman' => $request->isi_pengumuman,
            'kategori' => $request->kategori
        ]);
        return redirect('/admin/konten-pengumuman')->with('status', 'Data Pengumuman Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(Pengumuman $Pengumuman)
    {
       return view('Admin.konten.show.pengumuman', compact('Pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $Pengumuman)
    {
        $Admin = Admin::all();
        return view('Admin.konten.show.edit_kn_pengumuman', compact('Pengumuman', 'Admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $Pengumuman)
    {
        $request->validate([
            'judul_pengumuman' => 'required',
            'tanggal_pengumuman' => 'required',
            'id_admin' => 'required',
            'isi_pengumuman' => 'required',
            'kategori' => 'required'
        ]);
        Pengumuman::where('id', $Pengumuman->id)
        ->update([
            'id_admin' => $request->id_admin,
            'judul_pengumuman' => $request->judul_pengumuman,
            'tanggal_pengumuman' => $request->tanggal_pengumuman,
            'isi_pengumuman' => $request->isi_pengumuman,
            'kategori' => $request->kategori
        ]);
        return redirect('/admin/konten-pengumuman')->with('status', 'Data Pengumuman Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $Pengumuman)
    {
        Pengumuman::destroy($Pengumuman->id);
        return redirect('/admin/konten-pengumuman')->with('delete', 'Data Pengumuman Berhasil Dihapus!');
    }
}
