<?php

namespace App\Http\Controllers\modal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileController extends Controller
{
   public function upload_file(){
    return view('upload');
   }
   public function post_upload_file(Request $request){
    if($request->has('file')){
        $file=$request->file;
        $file_name=$file->getClientOriginalName();
      $file->move(base_path('upload'),$file_name);
    }



   }

}
