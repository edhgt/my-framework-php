<?php

namespace App\Http\Controllers;

use App\Http\Response;

/**
 * HomeController
 */
class HomeController
{
	
	public function index()
	{
		return new Response('home');
	}
}
