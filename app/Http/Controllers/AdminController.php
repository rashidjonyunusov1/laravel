<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }
    public function about(){
        return view('admin.about');
    }
    public function contact() {
        return view('admin.contact');
    }
    public function product() {
        return view('admin.product');
    }
    public function services() {
        return view('admin.services');      
    }
    public function like() {
        return view('admin.like');
    }
    public function messages() {
        return view('admin.messages');
    }
    public function profile() {
        return view('admin.profile');
    }
    public function money() {
        return view('admin.money');
    }
    public function date() {
        return view('admin.date');
    }

}
