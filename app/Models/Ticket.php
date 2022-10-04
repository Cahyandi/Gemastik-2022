<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function User()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function Wisata()
    {
        return $this->belongsTo(Wisata::class, 'id_wisata');
    }
}
