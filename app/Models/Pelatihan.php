<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pegawai_id',
        'nama_pelatihan',
        'tanggal_pelatihan',
        'penyelenggara',
        'hasil_pelatihan',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
