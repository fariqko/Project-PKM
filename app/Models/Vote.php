<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kandidat_id',
        'pemilihan_id',
        'waktu_vote',
    ];

    protected $casts = [
        'waktu_vote' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function kandidat(): BelongsTo
    {
        return $this->belongsTo(Kandidat::class);
    }

    public function pemilihan(): BelongsTo
    {
        return $this->belongsTo(Pemilihan::class);
    }
}
