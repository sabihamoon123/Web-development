<?php

namespace App\classes ;
use App\classes\Blog ;
class Home

{
    public $blog, $blogs = [] ;
    public function index()
    {
        $this->blog = new Blog() ;
        $this->blogs = $this->blog->getAllBlog() ;
        return view ('home', ['blogs' => $this->blogs]) ;
        return view('home') ;
    }
    public function about()
    {
        return view('about') ;
    }
    public function service()
    {
        return view('service') ;
    }
}