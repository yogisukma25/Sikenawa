<?php

namespace App\Http\Controllers\Administrator\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Halaman Admin'
        ];

        return view('admin.home.index', $data);
    }
}
