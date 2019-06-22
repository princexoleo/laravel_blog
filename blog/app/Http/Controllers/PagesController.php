<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.index');  //this will show index.blade.php file
    }

    public function about(){
        return view('pages.about');  //this will show sbout.blade.php file
    }

    public function services(){
        return view('pages.services');  //this will show services.blade.php file
    }
}
