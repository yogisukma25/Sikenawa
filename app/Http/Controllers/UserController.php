<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view(
            
            // if(role==1){
            //     'admin.index',
            // [title => ('Halaman Admin'),]
            // }else if(role==2){
            //     'user.index',
            // [title => ('Halaman User'),]
            // }else if(role==3){
            //     'guest.index',
            // [title => ('Halaman Guest),]
            // }
        );
    }
}
