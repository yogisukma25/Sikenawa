<?php

namespace App\Http\Controllers\DiseaseMapController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DiseaseMapController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Peta Penyakit'
        ];

        return view('disease-map.disease-map', $data);
    }
}
