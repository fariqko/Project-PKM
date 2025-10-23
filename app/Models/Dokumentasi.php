<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dokumentasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kegiatan_id', 
        'foto', 
        'deskripsi'
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
