<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function privacity()
    {
        return view('legal.privacity');
    }

    public function usage()
    {
        return view('legal.usage');
    }
}
