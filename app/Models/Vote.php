<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = [
        'pemilihan_id', 
        'user_id', 
        'kandidat_id'
    ];

    public function pemilihan()
    {
        return $this->belongsTo(Pemilihan::class);
    }

    public function kandidat()
    {
        return $this->belongsTo(KandidatKetua::class, 'kandidat_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
