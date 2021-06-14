<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Admin = Admin::all();
        return view('Admin.pengaturan', compact('Admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.show.create-admin');
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
            'nama_lengkap' => 'required',
            'email' => 'required',
            'username' => 'required',
            'role' => 'required',
            'id_admin' => 'required',
            'password' => 'required',
            'image' => 'required',
            'image.*' => 'mimes:jpg,jpeg,png|max:2000'
        ]);
        $imageName = time().'.'.$request->image->extension();
        Admin::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'username' => $request->username,
            'role' => $request->role,
            'id_admin' => $request->id_admin,
            'password' => Hash::make($request->password),
            'image' => $request->image->move('images', $imageName)
        ]);
        return redirect('/admin/pengaturan-admin')->with('status', 'Data Admin Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $Admin)
    {
        return view('Admin.show.admin', compact('Admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $Admin)
    {
        return view('Admin.show.edit-admin', compact('Admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $Admin)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
            'username' => 'required',
            'role' => 'required',
            'id_admin' => 'required',
            'password' => 'required'
        ]);
        Admin::where('id', $Admin->id)
        ->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'username' => $request->username,
            'role' => $request->role,
            'id_admin' => $request->id_admin,
            'password' => Hash::make($request->password)
        ]);
        return redirect('/admin/pengaturan-admin')->with('status', 'Data Admin Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        Admin::destroy($admin->id);
        return redirect('/admin/pengaturan-admin')->with('delete', 'Data Admin Berhasil Dihapus!');
    }
}
