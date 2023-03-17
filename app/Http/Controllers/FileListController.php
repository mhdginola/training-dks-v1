<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class FileListController extends Controller
{
    public function listVideo(){
      $videos = Upload::where('type', 'videos')->get();
      return view('upload.list', ['videos' => $videos]);
    }

    public function downloadVideo(Request $request){
      $params = $request->route('id');
      return response()
      ->file(storage_path('/app/videos/'. $params));
    }
}
