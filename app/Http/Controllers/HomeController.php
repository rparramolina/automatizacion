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
        //TODO: logica de la wea
        $userName = "no esta logueado";
        if (Auth::check()) {
            $userName = auth()->user()->password;
        }




        return view('dashboard.dashboard', compact('userName'));
    }
}
