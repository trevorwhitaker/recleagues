<?php

namespace App\Http\Controllers;

use Input;

use App\League;

use Mail;

use Session;

use Validator;

class PagesController extends Controller
{
	public function getIndex() 
	{
        $count = League::where('validated', 1)->count();
		return view('Pages.index')->withCount($count);
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

	public function getContact() 
	{
		return view('Pages.contact');
	}

	public function getConfirmation() 
	{
		return view('Pages.confirmation');
	}

	public function sendContact()
    {
    	$params = Input::all();

    	if (strlen($params['email']) > 100)
    	{
    		Session::flash('error', 'The email address must be less than 100 characters.');
    		return redirect()->action('PagesController@getContact');
    	}

    	if (strlen($params['text']) > 400)
    	{
    		Session::flash('error', 'The message must be less than 400 characters.');
    		return redirect()->action('PagesController@getContact');
    	}

    	$validate = Validator::make(Input::all(), [
		    'g-recaptcha-response' => 'required|captcha'
		]);

    	if ($validate->fails())
    	{
    		Session::flash('error', 'Please verify you are not a robot.');
    		return redirect()->action('PagesController@getContact');
    	}

    	$emaildata = array(
    		'email' => $params['email'],
    		'text' => $params['text']
    		);

    	Mail::send('Emails.contact', $emaildata, function($message) use ($emaildata)
            {
              $message->to('contact.recreationalleagues@gmail.com', 'Bob Whitaker')
                      ->subject('New Message/Request');
            });

        Session::flash('success', 'Thanks you! Your message has been successfully sent.');
        return redirect('/');
    }
}