<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan daftar semua users (list.blade.php)
    public function index()
    {
        return view('admin.users.list');
    }

    // Menampilkan form create (tambah.blade.php)
    public function create()
    {
        return view('admin.users.tambah');
    }

    // Menyimpan user baru ke database
    public function store(Request $request)
    {
        // Validasi akan ditambahkan nanti
        // User::create($request->all());
        // return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan');
    }

    // Menampilkan detail user (detail.blade.php)
    public function show($id)
    {
        return view('admin.users.detail');
    }

    // Menampilkan form edit (ubah.blade.php)
    public function edit($id)
    {
        return view('admin.users.ubah');
    }

    // Update user di database
    public function update(Request $request, $id)
    {
        // Validasi dan update akan ditambahkan nanti
        // return redirect()->route('users.index')->with('success', 'User berhasil diupdate');
    }

    // Hapus user
    public function destroy($id)
    {
        // Delete akan ditambahkan nanti
        // return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
    }
}