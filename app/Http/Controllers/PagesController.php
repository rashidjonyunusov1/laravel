<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
 
 public function store(Request $request){   
  DB::table('orders')->insert([
    'your_name' => $request->name,
    'phone_number' => $request->phone,
    'class' => $request->group
  ]);
  return back();
 }
}
