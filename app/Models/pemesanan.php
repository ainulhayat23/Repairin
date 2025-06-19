<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function teknisi()
    {
        return $this->belongsTo(User::class, 'teknisi_id');
    }

    public function cabang()
    {
        return $this->belongsTo(cabang::class);
    }

    public function layanan()
    {
        return $this->belongsTo(layanan::class);
    }

    public function transaksi()
    {
        return $this->hasOne(transaksi::class);
    }
}
