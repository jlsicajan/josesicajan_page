<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    public function home(){
        return view('welcome');
    }
    /**
     * Show about me information.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function aboutme()
    {
        return view('jl.about-me');
    }

    public function resume(){
        return view('jl.resume');
    }

    public function services(){
        return view('jl.services');
    }

    public function portfolio(){
        return view('jl.portfolio');
    }

    public function blog(){
        return view('jl.blog');
    }

    public function contact(){
        return view('jl.contact');
    }
}
