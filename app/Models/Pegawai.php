<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'tanggal_masuk',
        'bagian_id',
        'jabatan_id',
        'foto',
    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
