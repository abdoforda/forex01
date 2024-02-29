<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function page($slug){
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('pages.page', compact('page'));
    }
}
