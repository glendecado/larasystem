<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{

    public function main()
    {
        if (!Auth::check()) {
            return view('guest.welcome');
        } else {
            return view('user.index');
        }
    }
    public function guest()
    {
        $url = Route::getCurrentRoute()->uri;
        return view('guest.' . $url);
    }
}
