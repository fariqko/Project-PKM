<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama',
        'nis',
        'kelas',
        'no_hp',
        'alamat',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function anggotaOsis(): HasOne
    {
        return $this->hasOne(AnggotaOsis::class);
    }
    
    public function pesertaEkskuls(): HasMany
    {
        return $this->hasMany(PesertaEkskul::class);
    }
}
