<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';

    // jenis dokumen
    public function jenisdokumen()
    {
        return $this->hasMany(jenisdokumen::class);
    }
    // tipe dokumen
    public function tipedokumen()
    {
        return $this->hasMany(tipeDokumen::class);
    }
}
