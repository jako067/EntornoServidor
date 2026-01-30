<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class CookFAQController extends Controller
{
     public function cookies(): View
    {
        return view('legal.cookies');
    }

    public function faq(): View
    {
        return view('legal.faq');
    }

}
