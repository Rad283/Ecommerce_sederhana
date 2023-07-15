<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal',
        'nama_pemesan',
        'alamat_pemesan',
        'no_hp',
        'email',
        'jumlah_pesanan',
        'deskripsi',
        'produk_id',
        'user_id'
    ];

    public function pesanan()
    {
        return $this->belongsTo(Produk::class);
    }

    public function tampil()
    {
        $tampil = DB::table('pesanan')
            ->join('produks', 'pesanan.produk_id', '=', 'produks.id')
            ->select('pesanan.*', 'produks.nama as nama_produk')
            ->get();
        return $tampil;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    public function produk(): BelongsTo
    {
        return $this->belongsTo(produk::class);
    }
}
