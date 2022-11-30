<?php

namespace App\Http\Controllers\Administrator\MapController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Peta'
        ];

        return view('admin.map.map', $data);
    }
}
