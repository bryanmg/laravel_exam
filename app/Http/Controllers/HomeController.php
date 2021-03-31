<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $view = $this->redirectOnUser(); 
        return view($view);
    }
    
    private function redirectOnUser(){
        if(Auth::user()->role_id == 2){
            return '/services/home';
        }
        else if(Auth::user()->role_id == 1){ 
            return '/admin/home';
        }
        return '/home';
    }
}
