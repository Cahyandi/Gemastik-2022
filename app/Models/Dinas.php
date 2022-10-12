<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Dinas extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'dinas';
    protected $guard = 'dinas';

    public function Wisata()
    {
        return $this->hasMany(Wisata::class);
    }
}
