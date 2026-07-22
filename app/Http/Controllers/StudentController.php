<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return"Halaman Daftar Siswa";
    }

    public function show(string $id)
    {
        return"Detail Siswa ID:{$id}";
    }

    public function create()
    {
        return"Buat Akun Siswa";
    }

    public function edit(string $id)
    {
        return"Edit Akun Siswa ID: {$id}";
    }

    public function store()
    {
        return"Edit Siswa";
    }

    public function destroy(string $id)
    {
        return"Hapus Akun Siswa ID: {$id}";
    }

}
