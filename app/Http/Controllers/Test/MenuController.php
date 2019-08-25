<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    //
    public function menu()
    {
        if (Auth::check()) {
            return view('test/menu');
        } else {
            return view('auth/login');
        }
    }
}
