<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'wisata_id', 'komentar', 'rating', 'foto'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Wisata()
    {
        return $this->belongsTo(Wisata::class);
    }
}
