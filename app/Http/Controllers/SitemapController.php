<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;

class SitemapController extends Controller
{
    public function sitemap()
    {
        $posts = Request::all();
        return response()->view('sitemap', compact('posts'))->header('Content-Type', 'text/xml');
    }
}
