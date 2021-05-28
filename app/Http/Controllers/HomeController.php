<?php

namespace App\Http\Controller;

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
