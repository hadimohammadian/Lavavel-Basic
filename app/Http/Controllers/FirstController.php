<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return "index in first controller";
    }

    public function about()
    {
        return "about in first controller";

    }
}
