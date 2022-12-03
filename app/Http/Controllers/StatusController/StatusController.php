<?php

namespace App\Http\Controllers\StatusController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Status'
        ];

        return view('status.status', $data);
    }

    public function generateId() {
        $data = [
            'title' => 'Masukan Nomor Id'
        ];

        return view('status.generateId', $data);
    }
}
