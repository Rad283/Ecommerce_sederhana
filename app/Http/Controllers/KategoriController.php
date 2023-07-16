<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = new kategori();
        return view('admin.kategori.kategori', ['kategori' => $kategori->tampil()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = kategori::all();
        return view('admin.kategori.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();
        if ($request->user()->role == 'user') {
            return redirect('user');
        } else {
            return redirect('admin/kategori');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(kategori $kategori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, kategori $kategori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Request $request)
    {
        DB::table('kategoris')->where('id', $id)->delete();
        if ($request->user()->role == 'user') {
            return redirect('user');
        } else {
            return redirect('admin/kategori');
        }
    }
}