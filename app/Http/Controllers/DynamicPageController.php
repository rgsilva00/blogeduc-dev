<?php

namespace App\Http\Controllers;

class DynamicPageController extends Controller {
	public function getMei() {
		return view('webblog.mei');
	}

	public function getProgweb() {
		return view('webblog.progweb');
	}

	public function getRoboeduc() {
		return view('webblog.roboeduc');
	}
}