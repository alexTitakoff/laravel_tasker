<?php 



//\App\Http\Controllers\HomeController __construct 

namespace App\Http\Controllers;
//use App\Jobs\ChangeLocale;
class HomeController extends Controller
{








	public function index()
	{
		return view('pages.home.home');
	}


}

