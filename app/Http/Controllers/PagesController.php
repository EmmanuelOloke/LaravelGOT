<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
    	$people = 
    	[
    		'Taylor Otwell',
    		'Prosper Otemuyiwa',
    		'Segun Famisa',
    		'Timi God',
    		'Ire Aderinokun',
    		'Emmanule Oloke',
    		'Adewale Abati'
    	];
    	return view('about', compact('people'));
    }
}
