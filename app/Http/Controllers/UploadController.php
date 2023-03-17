<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UploadController extends Controller
{
    public function indexVideo()
    {
      $uploads = Upload::all();
      return view('upload.video', [
        'uploads' => $uploads,
      ]);
    }

    public function storeVideo(Request $request)
    {
      $request->validate([
        'video' => 'required|mimes:mp4,mkv',
      ]);
      
      $video = $request->file('video');

      $videoName = Str::random(10) . '-' . $video->getClientOriginalName();
      $video->storeAs('videos', $videoName, 'local');
      $file_size = number_format((float)($video->getSize()/1000000), 2, '.', ''). ' MB';

      Upload::create([
        'nama_file' => $video->getClientOriginalName(),
        'ukuran_file' => $file_size,
        'file_path' => $videoName,
      ]);

      return redirect('/upload/video')->with('message', 'success!');
    }

    public function indexPpt()
    {
      return view('upload.ppt');
    }

    public function storePpt(Request $request)
    {
      $request->validate([
        'ppt' => 'required|mimes:ppt,pptx',
      ]);
      
      $ppt = $request->file('ppt');

      $ppt->storeAs('ppt', $ppt->getClientOriginalName(), 'local');
      
      Upload::create([
        'file_path' => $ppt->getClientOriginalName()
      ]);

      return redirect('/upload/ppt')->with('message', 'success!');
    }

    public function indexVideoAdmin()
    {
      $uploads = Upload::paginate(1);
      return view('admin.document', [
        'uploads' => $uploads,
      ]);
    }
}
