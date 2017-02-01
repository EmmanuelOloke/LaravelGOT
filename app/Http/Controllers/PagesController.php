<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function about()
    {
    	$people = 
    	[
    		'Taylor Otwell',
    		'Prosper Otemuyiwa',
    		'Segun Famisa',
    		'Timigod',
    		'Ire Aderinokun',
    		'Emmanuel Oloke',
    		'Adewale Abati'
    	];
    	return view('about', compact('people'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function services()
    {
        $events =
        [
            'Weddings',
            'Naming Ceremonies',
            'Graduations',
            'Photo Shoots',
            'Modeling',
            'Street Arts',
            'House warming, Burials, etc',
        ];

        $clients =
        [
            'FF Pictures',
            'Shiffishutters Photography',
            'Batta Box',
            'Big Brother Naija',
            'Gulder Ultimate Search',
            'Maltina Dance Hall',
            'Mtn Project Fame',
        ];

        return view('services', compact('events', 'clients'));
    }

    public function slider()
    {
        return view('slider');
    }
}
