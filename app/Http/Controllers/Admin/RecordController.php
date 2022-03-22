<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;



class RecordController extends Controller
{
    public function index()
    {
        return view('admin-panel.record');
    }
}
