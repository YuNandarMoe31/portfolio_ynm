<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $imageData = Image::latest()->first();

        return view('index', compact('imageData'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutIndex()
    {
        $imageData = Image::latest()->first();

        return view('pages.about-page', compact('imageData'));
    }

    public function imageStore(Request $request)
    {
        $data= new Image();

        $validated = $request->validate([
            'image' => 'required',
        ]);
        
        if (request()->has('image')) {
            $imageuploaded = request()->file('image');
            $imagename = time() . '_' . $imageuploaded->getClientOriginalName();
            $imagepath = public_path('/upload/image/');
            $imageuploaded->move($imagepath, $imagename);
            $data['image']= $imagename;
        }

        $data = Image::create([
            'image' => '/' . $imagename,
        ]);
        
        return redirect()->back();
    }
}
