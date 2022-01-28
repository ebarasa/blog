<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
      $title = "Welcome To Eddie's Blog Page";
      return view('pages.index')->with('title', $title);
    }
    public function about(){
      $title = "Welcome To Our About Page";
      return view('pages.about')->with('title', $title);
    }
    public function services(){
      $data = array(
        'title' => 'Services',
        'services' => ['Web Design', 'Programming', 'SEO']
      );
      return view('pages.services')->with($data);
    }
}
