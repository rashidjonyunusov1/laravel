<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function welcome(){
        return view('welcome');
      }
    
      public function groups() {
        return view('pages.groups');
    } 
    
    public function blog() {
      return view('pages.blog');
    } 
    
    public function team() {
      return view('pages.team');
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
  }
