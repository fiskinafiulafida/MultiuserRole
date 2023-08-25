<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisDokumen extends Model
{
    use HasFactory;

    // untuk memproteksi field id
    protected $guarded = ['id'];

    public function jenisdokumen()
    {
        return $this->belongsTo(jenisdokumen::class);
    }
}
