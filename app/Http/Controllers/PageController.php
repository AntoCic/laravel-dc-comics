<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        $data = 'CIAO MONDO';
        return view('index', compact('data'));
    }
}
