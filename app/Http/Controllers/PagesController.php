<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
		$title = "Welcome to GeneSys";
		return view ('pages.index')->with('title', $title);
	}

	public function client(){
		$title = "Client Information";
		return view('pages.client')->with('title', $title);
	}

	public function insurance(){
		$title = "Insurance Page";
		return view('pages.insurance')->with('title', $title);
	}

	public function investment(){
		$title = "Investment Page";
		return view('pages.investment')->with('title', $title);
	}

	public function report(){
		$title = "Report Page";
		return view('pages.report')->with('title', $title);
	}
}
