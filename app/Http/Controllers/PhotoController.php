<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $photos = Photo::orderBy('id', 'DESC')->get();
        return view('admin.photos.index', compact('photos'));
    }

    public function create()
    {
        return view('admin.photos.add-photo');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'mainImage' => 'required'
        ]);

        $photo = new Photo();
        $photo->title = $request->title;
        $photo->image = $request->mainImage;
        if ($request->video) {
            $photo->video = $request->video;
        }
        $photo->save();
        $pm = 'تصویر شما با موفقیت ذخیره شد';

        return view('admin.photos.add-photo', compact('pm'));
    }

    public function edit($id)
    {
        $photo = Photo::findOrFail($id);
        return view('admin.photos.edit-photo', compact('photo'));
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'mainImage' => 'required'
        ]);

        $photo = Photo::findOrFail($id);
        $photo->title = $request->title;
        $photo->image = $request->mainImage;
        if ($request->video) {
            $photo->video = $request->video;
        }
        $photo->save();
        $pm = 'تصویر شما با موفقیت ویرایش شد';

        return view('admin.photos.edit-photo', compact('pm', 'photo'));
    }

    public function destroy($id)
    {
        $photo = Photo::findOrFail($id)->delete();
        $photos = Photo::orderBy('id', 'DESC')->get();
        return view('admin.photos.index', compact('photos'));
    }
}
