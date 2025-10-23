<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'ekstrakurikuler_id',
        'nama_kegiatan',
        'tanggal',
        'deskripsi',
    ];

    public function ekstrakurikuler()
    {
        return $this->belongsTo(Ekstrakurikuler::class);
    }

    public function dokumentasi()
    {
        return $this->hasMany(Dokumentasi::class);
    }
}
