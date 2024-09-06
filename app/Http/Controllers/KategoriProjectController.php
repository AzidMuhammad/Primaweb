<?php

namespace App\Http\Controllers;

use App\Models\KategoriProject;
use Illuminate\Http\Request;

class KategoriProjectController extends Controller
{

    public function create()
    {
        return view('adminView/projectCatCreate', [
            'tittle' => 'Project'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'galeri_kategori' => 'required|max:255',
        ]);

        KategoriProject::create($validatedData);

        return redirect('/dashboard/project')->with('pesan', 'Kategori project berhasil ditambah');
    }
}
