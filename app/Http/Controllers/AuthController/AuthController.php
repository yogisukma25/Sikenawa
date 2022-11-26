<?php

namespace App\Http\Controllers\AuthController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Sign In',
        ];

        return view('login.index', $data);
    }
}
