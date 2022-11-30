<?php

namespace App\Http\Controllers\Administrator\MapDataController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MapDataController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Data Peta'
        ];

        return view('admin.map_data.map_data', $data);
    }
}
