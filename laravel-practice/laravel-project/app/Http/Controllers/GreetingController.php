<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function showForm()
    {
        return view('greeting.form');
    }
    public function greet(Request $request)
    {
        $name = $request->input('name');
        return view('greeting.result', ['name' => $name]);
    }
}
