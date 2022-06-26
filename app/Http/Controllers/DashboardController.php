<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Showcase;
use App\Models\VideoIntro;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	public function __invoke()
	{
		$total_users = User::count();

		$data = [
			'total_users' => $total_users,
		];
		return view('dashboard', $data);
	}
}
