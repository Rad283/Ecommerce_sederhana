<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use file;

class ProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('cek_role:admin')->only(['create', 'store', 'edit', 'update', 'destroy']);
        $this->middleware('cek_role:admin-manager');
    }
    /**
     * Display a listing of the resource.
     */


    public function index(Request $request)
    {
        if (($request->string)) {
            $string = $request->string;
        } else {
            $string = '';
        }

        return view('admin.produk.index_produk', [
            'produks' => produk::search('nama', $string)->with('kategori')->paginate(10),
            'string' => $string
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.produk.create_produk', [
            'kategoris' => kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->authorize('create', produk::class);
        // Wajib validate buat file gambar!!! 
        $request->validate([
            'gambar' => 'required'
        ]);

        $path = $request->file('gambar')->store('public');

        produk::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'kategori_id' => $request->kategori_id,
        ]);

        return to_route('produk.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produk $produk)
    {
        return view('admin.produk.update_produk', [
            'produk' => $produk, 'kategoris' => kategori::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, produk $produk)
    {
        $this->authorize('update', produk::class);
        // Wajib validate buat file gambar!!! 
        Storage::delete($produk->gambar);

        $request->validate([
            'gambar' => 'required'
        ]);

        $path = $request->file('gambar')->store('public');

        $produk->update([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
            'kategori_id' => $request->kategori_id,
        ]);


        return to_route('produk.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produk $produk)
    {
        $this->authorize('delete', $produk);
        Storage::delete($produk->gambar);
        $produk->delete();

        return to_route('produk.index');
    }
}
