<?php

namespace App\Http\Controllers;
use App\Comics;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
   {
    $comics= Comics::all()->take(4);
    return view('home',compact('comics'));
   }
}
