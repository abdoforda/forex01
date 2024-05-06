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
    public function contactUs(){
        return "contactUs";
    }

    //demo_account
    public function demo_account(Request $request){
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        
        return 'ok';
    }

}
