<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Faq;

class FaqController extends Controller
{
    public function index()
    {
    	$faqs = Faq::all();

    	foreach ($faqs as $faq)
    	{
    		$faq->bodies = explode("\n", $faq->body);
    	}

    	return view('Pages.FAQ')->withFaqs($faqs);
    }

    public function create()
    {
    	return view('FAQ.create');
    }

    public function adminIndex()
    {
    	$faqs = Faq::all();

    	foreach ($faqs as $faq)
    	{
    		$faq->bodies = explode("\n", $faq->body);
    	}
    	return view('FAQ.index')->withFaqs($faqs);
    }

    public function edit($id)
    {
    	$faq = Faq::find($id);

    	return view('FAQ.edit')->withFaq($faq);
    }

    public function store(Request $request)
    {
    	$faq = new FAQ();
    	$faq->header = $request->header;
    	$faq->body = $request->body;
    	$faq->save();
    	return redirect()->action('FaqController@index');
    }

    public function update(Request $request, $id)
    {
    	$faq = FAQ::find($id);
    	$faq->body = $request->body;
    	$faq->header = $request->header;
    	$faq->save();
    	return redirect()->action('FaqController@index');
    }

    public function destroy($id)
    {
    	FAQ::destroy($id);
    	return redirect()->action('FaqController@index');
    }
}
