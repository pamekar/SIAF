<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use TCG\Voyager\Voyager;

class MediaController extends Controller
{
    //
    public function upload(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('users', 'public');
            return response()->json([
                'success' => true,
                'error'   => null,
                'path'    => $path,
                'url'     => Storage::url($path)
            ]);
        }
        return [];
    }
}
