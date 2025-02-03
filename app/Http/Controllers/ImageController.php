<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
//      function upload(Request $request)
// {
//     // $request->validate([
//     //     'file' => 'required|file|max:2048', 
//     // ]);
 
//     if ($request->hasFile('file')) {
//         $file = $request->file('file');
//         $path = $file->store('uploads','public'); 

//         return response()->json(['path' => $path], 200);
//     }

//     return response()->json(['error' => 'No file uploaded'], 400);
// }


    function upload(Request $request){
        $path = $request->file('file')->store('uploads', 'public');
        $pathArray = explode('/',$path);
        $imgPath = $pathArray[1];
        $image = new Image();
        $image->path = $imgPath;
        $image->save();

        if($image->save()){
            return redirect('img-list');
        } else {
            return "Image do not Uplorded";
        }

    }

    function list(){
        $imageDate = Image::all();
        return view('display', ['imgdata' => $imageDate]);
    }

}
