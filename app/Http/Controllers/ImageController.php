<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function index()
    {
        return view('image.index');
    }
        /**
     * 画像アップロード
     * 
     * @param Request $request
     * @return type
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'file' => [
                'required',
                'file',
                'image',
                'mimes:jpeg,png,gif',
            ]
        ]);
        
        if (!$request->file('file')->isValid()) {
            return back()->withInput()->withErrors();
        }
        $path = $request->file->store('public');
        return view('image.index')->with('filename', basename($path));
    }
}
