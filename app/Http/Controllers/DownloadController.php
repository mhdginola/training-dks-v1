<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function downloadVideo(Request $request)
    {
      return Storage::download('videos/' . $request->query('path'));
    }
}
