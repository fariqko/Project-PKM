<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PesertaEkskul extends Model
{
    use HasFactory;

    protected $table = 'peserta_ekskul';

    protected $fillable = [
        'siswa_id',
        'ekskul_id',
        'tanggal_gabung',
        'status',
    ];

    protected $casts = [
        'tanggal_gabung' => 'date',
    ];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }

    public function ekstrakurikuler(): BelongsTo
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'ekskul_id');
    }
}
