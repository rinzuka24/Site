<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
class PageController extends Controller
{
     public function index() {
        $data['pages'] = Page::all();
        return view('page-list', $data);
    }
    public function detail($id) {
        $data['page'] = Page::find($id);

        //dd($data);
        return view('page-detail', $data);
    }
}
