<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InteressesController extends Controller
{
    public function interesses()
    {
        return view('site.interesses');
    }

}
