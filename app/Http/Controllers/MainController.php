<?php

namespace p3\Http\Controllers;

use p3\Http\Controllers\Controller;

class MainController extends Controller {

    public function getMain() {
        return view('main');
    }
}
