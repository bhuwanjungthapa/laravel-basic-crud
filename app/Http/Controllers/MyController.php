<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function getMe(){
        return 'This is me';
    }
    
    function aboutMe(){
        return view('about');
    }
    function contactMe(){
        return view('contact');
    }
    function serviceMe(){
        return view('service');
    }
    function galleryMe(){
        return view('gallery');
    }
    
}
