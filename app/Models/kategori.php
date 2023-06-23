<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class kategori extends Model
{
    use HasFactory;

    public function produk(): HasMany
    {
        return $this->hasMany(produk::class);
    }
}
