<?php

namespace App\Http\Controllers\School;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "data kelas";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Daftar Kelas";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Menambah Kelas";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Menampilakn kelas ID:{$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Edit kelas ID:{$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Update Kelas ID: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "hapus kelas id:{$id}";
    }
}
