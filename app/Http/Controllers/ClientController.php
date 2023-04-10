<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index() {
        return view('client.index');
    }
    public function about(){
        return view('client.about');
    }
    public function contact() {
        return view('client.contact');
    }
    public function product() {
        return view('client.product');
    }
    public function services() {
        return view('client.services');      
    }
    public function like() {
        return view('client.like');
    }
    public function messages() {
        return view('client.messages');
    }
    public function profile() {
        return view('client.profile');
    }
    public function money() {
        return view('client.money');
    }
    public function date() {
        return view('client.date');
    }
    
}
