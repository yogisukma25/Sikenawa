<?php

namespace App\Http\Controllers\Administrator\UsersController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Akun Pengguna'
        ];

        return view('admin.user.user', $data);
    }
}
