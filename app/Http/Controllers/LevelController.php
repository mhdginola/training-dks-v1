<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function materi(Request $request)
    {
      $user = User::where('id', $request->session()->get('userId'))->first();
      return view('materi', ['level' => $user->level]);
    }

    public function quizList(Request $request)
    {
      $user = User::where('id', $request->session()->get('userId'))->first();
      return view('quizList', ['level' => $user->level]);
    }
}
