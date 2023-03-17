<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index(){
        $materis = Materi::paginate(10);
        return response()->view('admin.materi.index',[
            'materis' => $materis,
        ]);
    }

    public function indexAdd(){
        return response()->view('admin.materi.create');
    }

    public function store(Request $request){
        $request->validate([
            'video' => 'required|mimes:mp4|max:512000',
            'id_day' => 'required',
            'sub_day' => 'required'
        ]);

        $video = $request->file('video');
        $idSet = 'day' . $request->input('id_day') . 'a' . $request->input('sub_day');
        $videoName = 'day' . $request->input('id_day') . 'a' . $request->input('sub_day') . '.' . $video->getClientOriginalExtension();
        $file_size = number_format((float)($video->getSize()/1000000), 2, '.', ''). ' MB';

        Materi::updateOrInsert([
            'id' => $idSet,
        ],
        [
            'id' => $idSet,
            'day_id' => $request->input('id_day'),
            'sub_day' => $request->input('sub_day'),
            'original_name' => $video->getClientOriginalName(),
            'path' => $videoName, 
            'size' => $file_size,
            'updated_at' => Carbon::now()
        ]);

        $video->storeAs('videos/materi', $videoName, 'local');

        return redirect('/admin/materis');
    }
}
