<?php

namespace App\Http\Controllers;

use App\Http\Response;

/**
 * HomeController
 */
class ServicesController
{
	
	public function index()
	{
		return new Response('services');
	}
}
