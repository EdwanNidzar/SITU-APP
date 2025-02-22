<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lahan',
        'lokasi_lahan',
        'luas_lahan'
    ];

    public function tanaman()
    {
        return $this->hasMany(Tanaman::class);
    }
}
