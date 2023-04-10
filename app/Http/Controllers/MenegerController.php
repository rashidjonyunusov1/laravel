<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenegerController extends Controller
{
    public function index() {
        return view('meneger.index');
    }
    public function about(){
        return view('meneger.about');
    }
    public function contact() {
        return view('meneger.contact');
    }
    public function product() {
        return view('meneger.product');
    }
    public function services() {
        return view('meneger.services');      
    }
    public function like() {
        return view('meneger.like');
    }
    public function messages() {
        return view('meneger.messages');
    }
    public function profile() {
        return view('meneger.profile');
    }
    public function money() {
        return view('meneger.money');
    }
    public function date() {
        return view('meneger.date');
    }
}
