<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\City;

class CityController extends Controller
{
    public function getCities($query)
    {
    	$cities = City::select('city', 'province')->where('city', 'like', $query . '%')->take(5)->get();
    	return response()->json($cities);
    }
}
