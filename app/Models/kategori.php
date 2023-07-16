<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;


class kategori extends Model
{
    use HasFactory;

    public function produk(): HasMany
    {
        return $this->hasMany(produk::class);
    }
    public function tampil()
    {
        $tampil = DB::table('kategoris')
            ->select('kategoris.*')
            ->get();
        return $tampil;
    }
}