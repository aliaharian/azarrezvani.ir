<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Events;
use App\Models\Photo;
use App\Models\Product;
use App\Models\TemplateSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Mail;
use Spatie\Crawler\Crawler;
use Spatie\Sitemap\SitemapGenerator;

class WebsiteController extends Controller
{
    public function index()
    {


        return view('index');
    }

    public function about()
    {

        return view('about');
    }

    public function gallery()
    {
        $photos = Photo::all();
        return view('gallery',compact('photos'));
    }

    public function contact(Request $request)
    {

        return view('contact');
    }
    public function contactSend(Request $request)
    {

        if ($request->name && $request->email && $request->message) {
            if ($request->name != '' && $request->email != '' && $request->message != '') {

                $data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'mess' => $request->message
                ];

                Mail::send('mail', $data, function ($message) {
                    $message->to('ha.nasirzadeh@gmail.com', 'message from arts')->subject('message from arts');
                    $message->from('arts@nasirzadeh.com', 'arts nasirzadeh');
                });
            }
        }
        return redirect('/contact');
    }


    public function blog()
    {

        $posts = Blog::orderBy('id', 'DESC')->paginate(12);
        return view('blog', compact('posts'));
    }

    public function singleBlog($id, $slug)
    {
        $post = Blog::findOrFail($id);
        return view('singleBlog', compact('post'));
    }



    public function sendReq($id, $slug, Request $request)
    {

        if ($request->name && $request->mobile) {
            if ($request->name != '' && $request->mobile != '') {
                $prod = Product::findOrFail($id);
                $data = [
                    'name' => $request->name,
                    'mobile' => $request->mobile,
                    'productImg' => $prod->image
                ];
                Mail::send('Reqmail', $data, function ($message) {
                    $message->to('ha.nasirzadeh@gmail.com', 'message from arts')->subject('message from arts');
                    $message->from('arts@nasirzadeh.com', 'arts nasirzadeh');
                });
            }
        }
    }

    public function sitemap()
    {
        SitemapGenerator::create('https://arts.nasirzadeh.com')
            ->configureCrawler(function (Crawler $crawler) {
                $crawler->setMaximumDepth(300);
            })
            ->writeToFile('../public/sitemap2.xml');
    }
}
