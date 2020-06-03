<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
			$this->middleware('auth')->except('page');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
			return view('home');
	}

    /**
     * Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function page($type)
    {
      return view('pages.basic')->with('type', $type);
    }
}
