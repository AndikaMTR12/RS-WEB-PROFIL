<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function fasilitas()
    {
        return $this->belongsTo(Fasilitas::class, 'id_fasilitas_layanan', 'id_fasilitas_layanan');
    }
}
