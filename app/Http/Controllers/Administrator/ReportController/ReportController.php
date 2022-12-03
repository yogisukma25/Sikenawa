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

    public function view_report() {
        $data = [
            'title' => 'Balasan Pengaduan'
        ];

    return view('admin.report.view-report', $data);
    }
}
