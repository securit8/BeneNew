<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RoutesController extends Controller
{


   public function index() {
        return view('frontend.home');
    }

    public function about() {
        return view('frontend.about');
    }

    public function news() {
        return view('frontend.news');
    }

    public function fleet(){
        return view('frontend.fleet');
    }

    public function rent(){
        return view('frontend.rent');
    }
    
    public function academy(){
        return view('frontend.academy');
    }

    public function taxi(){
        return view('frontend.taxi');
    }

    public function partners(){
        return view('frontend.partners');
    }

    public function  motors(){
        return view('frontend.motors');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function electric(){
        return view('frontend.electric');
    }
    
    public function events(){
        return view('frontend.events');
    }
}

