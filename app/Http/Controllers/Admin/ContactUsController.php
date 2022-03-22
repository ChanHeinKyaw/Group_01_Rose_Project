<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;



class ContactUsController extends Controller
{
    public function index()
    {
        return view('admin-panel.contact');
    }
}
