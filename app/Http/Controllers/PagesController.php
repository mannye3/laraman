<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	// return view('pages.index');
    	$title='WELCOME TO MY WEBSITE';

    	return view('pages.index')->with('title', $title);

    }


    public function about(){

    	$title='ABOUT MY WEBSITE';

    	return view('pages.about')->with('title', $title);
    }

    public function services(){

    	$data = array(

    		'title' => 'services',
    		'services' => ['Web Design', 'Programming', 'SEO']
    	);
    	return view('pages.services')->with($data);
    }
}
