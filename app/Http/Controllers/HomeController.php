<?php

namespace App\Http\Controllers;

use App\Models\VideoIntro;
use Illuminate\Http\Request;

class HomeController extends Controller
{

	/**
	 * Show the application dashboard.
	 *
	 */
	public function __invoke()
	{
		return view('home');
	}
}
