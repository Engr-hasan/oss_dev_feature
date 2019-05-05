<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProfileImage;
use Carbon\Carbon;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FileUploadController extends Controller
{
    public function phpFileUpload(){
    	return view('image_upload.file-upload-php');
    }
    public function phpFileStore(Request $request){
    	$this->validate($request,[
            'profile_img' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
    	$img = new ProfileImage;
        $img->title = json_encode(['title'=>$request->title]); 
        $img->profile_img  = base64_encode(file_get_contents($request->profile_img));
        $img->save();
        return back();
    }
}
