<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use stdClass;

class FirstController extends Controller
{
    public function getWelcomePage()
    {
        // $obj = new stdClass();

        // $obj->name = "Ali";
        // $obj->age = 25;

        // return view('welcome', compact('obj'));

        return view('pages.welcome', [
            'name' => "Anas",
            'age' => 23
        ]);
    }
}
