<?php

namespace p3\Http\Controllers;

use \Badcow\LoremIpsum\Generator;
use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremController extends Controller {

    /**
     * Responds to requests to POST /lorem
     */
    public function postLorem(Request $request) {

        $this->validate($request, ['number_of_paragraphs' => 'required|min:1|max:99|numeric']);

        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($request->input('number_of_paragraphs'));
        // return view('lorem.lorem')->with('text', '<p>'.implode('</p><p>', $paragraphs).'</p>');
        return view('lorem.lorem')->with('text', $paragraphs);
    }
}
