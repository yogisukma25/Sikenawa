<?php

namespace App\Http\Controllers\Administrator\NotificationsController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Notifikasi'
        ];

        return view('admin.notifications.notifications', $data);
    }
}
