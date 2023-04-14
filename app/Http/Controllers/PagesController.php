<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

  public function index(){
    return view('index');
  }

  public function team() {
    return view('meneger.index');
} 

public function blog() {
  return view('meneger.index');
} 

public function class() {
  return view('meneger.index');
} 

public function gallary() {
  return view('meneger.index');
} 

public function article() {
  return view('meneger.index');
} 

public function achievements() {
  return view('meneger.index');
} 
}
