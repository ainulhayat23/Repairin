<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    protected $table = 'cabang';

    protected $guarded = [];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}