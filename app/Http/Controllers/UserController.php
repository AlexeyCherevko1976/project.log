<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
    	return view('funbox');
    	//return view('welcome');
    }
}
