<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('ui-panel.index');
    }

    public function report()
    {
        return view('ui-panel.report');
    }

    public function contact()
    {
        return view('ui-panel.contact');
    }

    public function about()
    {
        return view('ui-panel.about');
    }

    public function profile()
    {
        return view('ui-panel.profile');
    }
}
