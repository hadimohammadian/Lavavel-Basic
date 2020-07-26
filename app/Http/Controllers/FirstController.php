<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {

        dd("This statement is `Dump and Die` and kill after this statement");
        return "index in first controller";
    }

    public function about()
    {
        return "about in first controller";

    }

    public function GetUser($user,$pass)
    {
        dd("username : ".$user . "\n". "Pass : " . $pass);
    }

    public function para01($t1,$t2)
    {
        dd($t1." --- " .$t2);
    }

    public function para02($r1=null,$r2=null)
    {
        dd($r1." --- " .$r2);
    }
}
