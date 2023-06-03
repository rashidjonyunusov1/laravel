<?php

namespace App\Http\Controllers;


use App\Models\Comment;
use App\Models\Group;
use App\Models\Teacher;
use App\Models\Blog;
use App\Models\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{

  public function welcome(){

    // return Info::count();

    $infos = Info::latest()->take(6)->get();

    $groups = Group::latest()->take(3)->get();

    $teachers = Teacher::latest()->take(4)->get();

    $comments = Comment::latest()->take(1)->get();

    $blogs = Blog::latest()->take(3)->get();

    return view('welcome', compact('infos','groups','teachers', 'comments', 'blogs'));
  }

  public function team() {

    $comments = Comment::latest()->take(1)->get();

    $teachers = Teacher::latest()->take(4)->get();


    return view('pages.team', compact('teachers', 'comments'));
} 

public function blog() {

  $blogs = Blog::latest()->take(3)->get();

  return view('pages.blog', compact('blogs'));
} 

public function groups() {
  $groups = Group::latest()->take(3)->get();


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
