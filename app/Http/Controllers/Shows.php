<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Shows extends Controller
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
    
    public function index()
    {
    	return view('pages.shows.shows');
    }

    public function addShow()
    {
        return view('pages.shows.add-show');
    }
}

