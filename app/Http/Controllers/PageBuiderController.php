<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageBuiderController extends Controller
{
    public function index() {
        return view('page-builder');
    }
}
