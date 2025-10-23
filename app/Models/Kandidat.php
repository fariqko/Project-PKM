<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kandidat extends Model
{
    use HasFactory;

    protected $fillable = [
        'anggota_id',
        'pemilihan_id',
        'visi',
        'misi',
        'foto',
        'jumlah_suara',
    ];

    public function anggotaOsis(): BelongsTo
    {
        return $this->belongsTo(AnggotaOsis::class, 'anggota_id');
    }

    public function pemilihan(): BelongsTo
    {
        return $this->belongsTo(Pemilihan::class);
    }
    
    public function votes(): HasMany
    {
        return $this->hasMany(Vote::class);
    }
}
