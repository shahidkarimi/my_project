<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function loadPage($page, Request $request)
    {
        if(empty($page)){
            return redirect('/');
        }
        return view("pages.{$page}");
    }
}
