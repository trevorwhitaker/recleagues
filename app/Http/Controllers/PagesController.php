<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function getIndex() 
	{
		return view('Pages.index');
	}

	public function getFAQ() 
	{
		return view('Pages.FAQ');
	}

	public function getLeaguePage() 
	{
		$sport = 'baseball';
		$name = 'Cool League';

		$intro = $sport . " league called " . $name;
		$data = [];
		$data['sport'] = $sport;
		$data['intro'] = $intro;
		return view('Pages.leaguePage')->withData($data);
	}

	public function getLinks() 
	{
		return view('Pages.links');
	}

	public function getContact() 
	{
		return view('Pages.contact');
	}

	public function getAddLeague() 
	{
		return view('Leagues.create');
	}

	public function getConfirmation() 
	{
		return view('Pages.confirmation');
	}
}