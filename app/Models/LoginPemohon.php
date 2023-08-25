<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginPemohon extends Model
{
    use HasFactory;

    protected $table = 'pemohon';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'password',
        'jenisKelamin',
        'email',
        'nik',
        'usia',
        'pekerjaan',
        'pendidikanTerakhir',
        'noHp',
        'alamat',
        'profile',
    ];
}
