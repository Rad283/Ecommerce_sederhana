<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class produk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'kode', 'harga_beli', 'harga_jual', 'stok', 'deskripsi', 'gambar', 'kategori_id'
    ];


    public function kategori(): BelongsTo
    {
        return $this->belongsTo(kategori::class);
    }

    public function pesanan(): HasMany
    {
        return $this->hasMany(pesanan::class);
    }
}
