<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function index()
    {
        $posts=DB::table('contact')->get();
        return view('welcome', compact('posts'));
    }
}
