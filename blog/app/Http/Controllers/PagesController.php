<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = "Welcome to our Blog site!";
       // return view('pages.index', compact('title'));  //this will show index.blade.php file and pass a variable
       //another way to pass value
       return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = "About Blog!";
        return view('pages.about')->with('title', $title);  //this will show about.blade.php file
    }

    public function services(){
        //pass multiple values
        $data = array(
            'title' =>'Services',
            'services' => ['Web Development', 'Mobile Application Development','SEO'],
        );
        return view('pages.services')->with($data);  //this will show services.blade.php file
    }
}
