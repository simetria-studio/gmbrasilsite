<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function produtos()
    {
        return view('pages.produtos');
    }

    public function bonus()
    {
        return view('pages.bonus');
    }
}
