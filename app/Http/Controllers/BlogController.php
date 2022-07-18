<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $posts = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blog.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.blog.add-blog');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'mainImage' => 'required',
            'brief' => 'required',
            'author' => 'required',
            'tags' => 'required',
            'ckeditor' => 'required',
            // 'slug' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->image = $request->mainImage;
        $blog->brief = $request->brief;
        $blog->author = $request->author;
        $blog->tags = $request->tags;
        $blog->content = $request->ckeditor;
        // $blog->slug = $request->slug;
        $blog->save();
        $pm = 'مقاله شما با موفقیت ذخیره شد';

        return view('admin.blog.add-blog', compact('pm'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit-blog', compact('blog'));
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'mainImage' => 'required',
            'brief' => 'required',
            'author' => 'required',
            'tags' => 'required',
            'ckeditor' => 'required',
            // 'slug' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->image = $request->mainImage;
        $blog->brief = $request->brief;
        $blog->author = $request->author;
        $blog->tags = $request->tags;
        $blog->content = $request->ckeditor;
        // $blog->slug = $request->slug;
        $blog->save();
        $pm = 'مقاله شما با موفقیت ویرایش شد';

        return view('admin.blog.edit-blog', compact('pm', 'blog'));
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id)->delete();
        $posts = Blog::orderBy('id', 'DESC')->get();
        return view('admin.blog.index', compact('posts'));
    }
}
