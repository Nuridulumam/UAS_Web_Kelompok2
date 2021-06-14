<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Profile = Profile::all();
        return view('Admin.konten.kn_profile', compact('Profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Admin.konten.show.create_kn_profile');
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
            'tentang_prodi' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required'
        ]);
        Profile::create([
            'tentang_prodi' => $request->tentang_prodi,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan
        ]);
        return redirect('/admin/konten-profile')->with('status', 'Data Profile Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $Profile)
    {
        return view('Admin.konten.show.profile', compact('Profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $Profile)
    {
       return view('Admin.konten.show.edit_kn_profile', compact('Profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $Profile)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required',
            'tujuan' => 'required',
            'tentang_prodi' => 'required',
        ]);
        Profile::where('id', $Profile->id)
        ->update([
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tujuan' => $request->tujuan,
            'tentang_prodi' => $request->tentang_prodi,
        ]);
        return redirect('/admin/konten-profile')->with('status', 'Data Profile Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $Profile)
    {
        Profile::destroy($Profile->id);
        return redirect('/admin/konten-profile')->with('delete', 'Data Profile Berhasil Dihapus!');
    }
}
