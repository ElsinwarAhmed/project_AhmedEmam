<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    //

    public function showString()
    {
        return "Hello, the text from showString function that exist in SecondController file that exist in Front Folder";
    }
}
