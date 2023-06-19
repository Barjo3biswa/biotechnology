<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class annexureController extends Controller
{

    public function index()
    {
        return view('website.form');
    }
}
