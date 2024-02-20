<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function view()
    {
        return view('Registration');
    }
    public function register(Request $request)
    {
        print_r($request->all());
    }
}
