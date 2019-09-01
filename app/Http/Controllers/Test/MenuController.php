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

    //
    public function search(Request $request )
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if($request->action === 'back') {
            return view('test/menu');
        }
    }

    //
    public function update(Request $request )
    {
        $action = $request->get('action', 'back');
        $input = $request->except('action');

        if($request->action === 'back') {
            return view('test/menu');
        }
    }
}
