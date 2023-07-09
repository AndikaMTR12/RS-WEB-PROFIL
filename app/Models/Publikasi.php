<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function menu_publikasi()
    {
        return $this->belongsTo(MenuPublikasi::class, 'id_menu_publikasi', 'id_menu_publikasi');
    }
}
