<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ImageController extends Controller
{

    public function upload(Request $request) {
        // dd($request->file('image'));
        $path = $request->file('image')->store('uploads', 'public');

        return view('files', compact('path'));
    }
    //
}
