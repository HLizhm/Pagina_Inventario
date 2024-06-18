<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function History()
    {
        return view('user.history');
    }
    public function Sales()
    {
        return view('user.sales');
    }
}
