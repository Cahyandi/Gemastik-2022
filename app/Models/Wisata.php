<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'wisatas';

    public function Dinas()
    {
        return $this->belongsTo(Dinas::class, 'id_dinas');
    }

    public function Ulasan()
    {
        return $this->hasMany(Ulasan::class);
    }
}
