<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function x()
    {
        return view('feature/x');
    }
    public function notifications()
    {
        return view('feature/notifications');
    }
}
