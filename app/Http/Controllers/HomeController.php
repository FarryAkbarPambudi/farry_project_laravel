<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index'); //ini menuju ke halaman index.blade.php di folder resource/view
    }

    public function login(){
        return view('login'); //ini menuju ke halaman index.blade.php di folder resource/view
    }
    public function about(){
        $data = [
            'name' => 'Farry Akbar Pambudi',
            'address' => 'Patikraja',
            'email' => '541231072@student.smktelkom-pwt.sch.id'
        ];
        return view('about',$data);
    }

    
}
