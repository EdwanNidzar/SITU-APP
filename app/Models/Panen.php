<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    use HasFactory;

    protected $table = 'panens';

    protected $fillable = [
        'tanaman_id',
        'tanggal_panen',
        'jumlah',
    ];

    public function tanaman()
    {
        return $this->belongsTo(Tanaman::class);
    }
}
