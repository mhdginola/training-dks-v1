<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class Level1Controller extends Controller
{
  public function vid1():BinaryFileResponse{
    return response()
      ->file(storage_path('app/public/test.mp4'));
  }
}
