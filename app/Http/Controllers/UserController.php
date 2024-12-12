<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'password' => 'required|string',
            'username' => 'required|string',
            'nama_user' => 'required|string',
            // di ui ngga ada jenis_kelamin bejir, adanya alamat
            'jenis_kelamin' => 'required|string|',
            'telp_user' => 'required|string|digits_between:11,13',
        ]);
    }
}
