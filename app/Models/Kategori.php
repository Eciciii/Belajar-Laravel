<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nama_kategori',
    ];

    /**
     * barangs
     *
     * Define the relationship between Kategori and Barang models
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barangs()
    {
        return $this->hasMany(Barang::class, 'kategori_id');
    }
}
