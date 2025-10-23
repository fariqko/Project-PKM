<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemilihan extends Model
{
    use HasFactory;

    protected $table = 'pemilihan';

    protected $fillable = [
        'nama_pemilihan',
        'tahun',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    protected $casts = [
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
        'tahun' => 'integer',
    ];

    public function kandidats(): HasMany
    {
        return $this->hasMany(Kandidat::class);
    }
    
    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }
}
