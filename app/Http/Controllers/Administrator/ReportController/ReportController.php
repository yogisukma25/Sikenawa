<?php

namespace App\Http\Controllers\Administrator\ReportController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
 
    public function index() {
        $data = [
            'title' => 'Data Pengadua'
        ];

        return view('admin.report.report', $data);
    }
}
