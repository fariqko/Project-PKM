<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pemilihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'periode',
        'tanggal_mulai',
        'tanggal_selesai',
        'status'
    ];

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }
}
