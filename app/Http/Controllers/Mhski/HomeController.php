<?php

namespace App\Http\Controllers\Mhski;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/mhski/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('mhski.auth:mhski');
    }

    /**
     * Show the Mhski dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('mhski.home');
    }

    public function formajuan()
    {
        return view('mhski.pages.formajuan');
    }

    public function statusajuan()
    {
        return view('mhski.pages.statusajuan');
    }

}