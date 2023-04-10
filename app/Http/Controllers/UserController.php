<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user.index');
    }
    public function about(){
        return view('user.about');
    }
    public function contact() {
        return view('user.contact');
    }
    public function product() {
        return view('user.product');
    }
    public function services() {
        return view('user.services');      
    }
    public function like() {
        return view('user.like');
    }
    public function messages() {
        return view('user.messages');
    }
    public function profile() {
        return view('user.profile');
    }
    public function money() {
        return view('user.money');
    }
    public function date() {
        return view('user.date');
    }
}
