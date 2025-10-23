<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    protected $table = 'ekstrakurikuler';

    protected $fillable = [
        'nama',
        'pembina',
        'deskripsi',
        'jadwal',
    ];

    public function pesertaEkskuls(): HasMany
    {
        return $this->hasMany(PesertaEkskul::class, 'ekskul_id');
    }
    
    // Relasi Many-to-Many via tabel pivot PesertaEkskul
    public function siswa(): BelongsToMany
    {
        return $this->belongsToMany(Siswa::class, 'peserta_ekskul', 'ekskul_id', 'siswa_id')
                    ->withPivot('tanggal_gabung', 'status')
                    ->withTimestamps();
    }
}
