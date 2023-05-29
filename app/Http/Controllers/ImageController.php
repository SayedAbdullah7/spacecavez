<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path = $request->file('image')->store('public/images');

            $url = Storage::url($path);

            return response()->json([
                'url' => $url
            ]);
        }

        return response()->json([
            'error' => 'Invalid file or file upload error.'
        ], 400);
    }
}
