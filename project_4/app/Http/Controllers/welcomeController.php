<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class welcomeController extends Controller
{

   /*  public function nahid () {
        return view('test');
    } */
    public function index () {
         return view('front.home.home-contact');
        
    }
} 