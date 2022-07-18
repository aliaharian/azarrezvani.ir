<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Events;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sitemap()
    {
        $photos = Photo::all();
        $posts = Blog::all();
        return response()
            ->view('sitemap',compact('photos' , 'posts'), 200)
            ->header('Content-Type', 'application/xml');

    }
}
