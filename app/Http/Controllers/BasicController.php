<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    //fucntion home
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function service(){
        return view('pages.service');
    }

    public function portfolio(){
        return "Portfolio page";
    }

    public function blog(){
        return "Blog page";
    }

    public function contact(){
        return view('pages.contact');
    }

    public function login(){
        return view('pages.login');
    }
}

