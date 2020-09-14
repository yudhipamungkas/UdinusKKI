<?php

namespace App\Http\Controllers\Mhskki;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/mhskki/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('mhskki.auth:mhskki');
    }

    /**
     * Show the Mhskki dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('mhskki.home');
    }

}