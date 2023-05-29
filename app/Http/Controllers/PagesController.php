<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

  public function welcome(){
    $infos = Info::latest()->take(6)->get();

    $groups = DB::table('groups')->latest()->take(3)->get();
    return view('welcome', compact('infos','groups'));
  }

  public function team() {
    return view('pages.team');
} 

public function blog() {
  return view('pages.blog');
} 

public function groups() {
  $groups = DB::table('groups')->latest()->take(6)->get();
  return view('pages.groups', compact('groups'));
} 

public function gallary() {
  return view('pages.gallary');
} 

public function article() {
  return view('pages.article');
} 

public function achievements() {
  return view('pages.achievements');
}
public function contact() {
  return view('pages.contact');
}
 
 public function store(Request $request){   
  DB::table('orders')->insert([
    'your_name' => $request->name,
    'phone_number' => $request->phone_number,
    'class' => $request->group
  ]);
  return back();
 }
}
