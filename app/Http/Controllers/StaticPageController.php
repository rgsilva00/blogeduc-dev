<?php

namespace App\Http\Controllers;

class StaticPageController extends Controller {
	public function getHome() {
		return view('home');
	}

	public function getEducacao() {
		return view('website.educacao');
	}

	public function getInformatica() {
		return view('website.informatica');
	}

	public function getTeceduc() {
		return view('website.teceduc');
	}
}