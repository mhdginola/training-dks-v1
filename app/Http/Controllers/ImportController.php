<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImportController extends Controller
{
    public function day10post(Request $request)
    {
      $validateData = $request->validate([
        'powerpoint' => 'required|max:1000|mimes:pptx,ppt,pptm'
      ]);
      
      $picture = $request->file('powerpoint');
      
      $extension = "." .$picture->extension();
      $date = Carbon::now()->setTimezone("Asia/Jakarta")->format('Y.m.d-H.s-');
      $rand = Str::random(10);
      $name = $date.$rand.$extension;
      
      $picture->storePubliclyAs("excell", $name, "public");

      return "OK : " .$name;
    }
}
