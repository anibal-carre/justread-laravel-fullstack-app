<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadabilityController extends Controller
{
    public function index()
    {
        return view('readability');
    }
}
