<?php

namespace App\Http\Controllers\StatusController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('status.status');
    }
}
