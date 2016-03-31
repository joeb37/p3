<?php

namespace p3\Http\Controllers;

use Faker\Factory as Faker;
use p3\Http\Controllers\Controller;
use Illuminate\Http\Request;

# require_once '/Applications/MAMP/htdocs/p3/vendor/fzaninotto/faker/src/autoload.php';

class UserController extends Controller {

    /**
     * Responds to requests to POST /user
     */
    public function postUser(Request $request) {

        // Validate the user's input
        $this->validate($request, ['number_of_users' => 'required|min:1|max:99|numeric']);

        // Use Faker to create the users
        $users = [];
        for ($j = 0; $j < $request->input('number_of_users'); $j++) {
            $faker = Faker::create();
            array_push($users, $faker);
        }

        // Pass the results to the view for display.
        return view('user.user')->with('users', $users);
    }
}
