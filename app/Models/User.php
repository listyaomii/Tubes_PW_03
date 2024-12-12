<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'users';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'password',
        'username',
        'nama_user',
        'jenis_kelamin',
        'email_user',
        'telp_user',
    ];

    //harusnya dia ada relasi sama tabel apa? Pemesanan // Penumpang // Admin
}
