<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function about()
    {
    	$number = rand(1,10);

    	if($number == 10)
    	{
    		$message = 'SURPRISE ! REDUCTION DE 50% SUR TOUT LE SITE !';
    	}
    	else
    	{
    		$message = '';
    	}
    	return view('a_propos',['message' => $message]);
    }
}
