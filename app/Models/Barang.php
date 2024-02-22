<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama_barang', 'jumlah', 'keterangan', 'harga_barang', 'id_kategori'];

    /**
     * Get the category that owns the product.
     */
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}

