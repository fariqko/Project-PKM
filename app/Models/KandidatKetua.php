<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KandidatKetua extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'visi',
        'misi', 
        'periode'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
