<?php

namespace App\Http\Controllers\User;

use DB;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
	public function signup()
	{
		$users = DB::select('select * from users');
		return serialize($users);
	}
}

