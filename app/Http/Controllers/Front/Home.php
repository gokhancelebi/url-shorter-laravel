<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{

    public function user_home()
    {
        return view('user_home');
    }
}
