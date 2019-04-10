<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnowledgeController extends Controller
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
     * Display company main page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('knowledges.index');
    }
}
