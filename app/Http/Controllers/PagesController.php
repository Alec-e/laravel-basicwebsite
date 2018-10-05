<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){

    	$users = User::where("email", "michele@outlook.com")->get();

    	return view('home', ["users" => $users]);
    }
    public function getAbout(){
    	return view('about');
    }
    public function getContact(){
    	return view('contact');
    }
}
