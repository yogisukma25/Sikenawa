<?php

namespace App\Http\Controllers\Administrator\AuthController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Login',
        ];

        return view('auth.index', $data);
    }

    public function register() {
        $data = [
            'title' => 'Daftar',
        ];

        return view('auth.register', $data);
    }
}
