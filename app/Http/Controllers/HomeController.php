<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        if (auth()->user()->type == 0) {
            return view('home');    
        }
        else if (auth()->user()->type == 1) {
            return view('admin');    
        }
        else if (auth()->user()->type == 2) {
            $allusers = \App\User::where('type', 1)
            ->OrWhere('type', 0)->get();
            return view('super_admin', compact('allusers', 'user'));    
        }
    }
}
