<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Custom Roting
    public function home(){
		return view('home');
	}
 
	public function tentang(){
		return view('about');
	}
 
	public function kontak(){
		return view('contact');
	}
}
