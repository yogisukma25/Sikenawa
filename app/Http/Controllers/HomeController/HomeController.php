<?php

namespace App\Http\Controllers\HomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Beranda',
        ];
        return view('home', $data);
    }
}
