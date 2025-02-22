<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    use HasFactory;

    protected $table = 'tanamen';

    protected $fillable = [
        'lahan_id',
        'nama_tanaman',
        'tanggal_tanam',
    ];

    public function lahan()
    {
        return $this->belongsTo(Lahan::class);
    }

    public function pemeliharaans()
    {
        return $this->hasMany(Pemeliharaan::class, 'tanaman_id');
    }
}
