<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
    use HasFactory, HasApiTokens;
    protected $table = 'admins';
    protected $primaryKey = 'id_admin';
    
    protected $fillable = [
        'nama_admin',
        'email_admin',
        'password_admin',
    ];
}
