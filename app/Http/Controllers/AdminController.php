<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'user' => User::all()->count(),
            'produk' => produk::all()->count(),
            'kategori' => kategori::all()->count()
        ]);
    }

    public function profile(Request $request)
    {
        return view('admin.profile', [
            'user' => $request->user()
        ]);
    }
}
