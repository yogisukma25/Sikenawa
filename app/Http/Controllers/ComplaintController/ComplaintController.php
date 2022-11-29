<?php

namespace App\Http\Controllers\ComplaintController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Pengaduan'
        ];  

        return view('complaint.complaint', $data);
    }
}
