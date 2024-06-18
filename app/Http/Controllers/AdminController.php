<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Panel()
    {
        return view('administrator.panel');
    }
    public function AddBales()
    {
        return view('administrator.add-bales');
    }
}
