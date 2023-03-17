<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\QuizExport;
use App\Http\Controllers\Controller;
use App\Models\Essay;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HasilController extends Controller
{
    public function index(Request $request):Response
    {
      $hasil = Quiz::where("user_id", $request->session()->get('userId'))->orderby('updated_at', 'DESC')->paginate(10); 
      foreach ($hasil as $hasi ) {
        $hasi->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $hasi->created_at, 'UTC')->setTimezone('Asia/Jakarta');
      }
      return response()->view("hasil", ["hasil" => $hasil]);
    }

    public function hasilQuizAdmin():Response
    {
      $hasil = Quiz::orderby('updated_at', 'DESC')->paginate(10); 
      foreach ($hasil as $hasi ) {
        $hasi->created_at = Carbon::createFromFormat('Y-m-d H:i:s', $hasi->created_at, 'UTC')->setTimezone('Asia/Jakarta');
      }
      return response()->view("admin.hasil", ["hasil" => $hasil]);
    }

    public function hasilEssay(){
      $essays = Essay::orderby('updated_at', 'DESC')->paginate(10);
      return response()->view('admin.essay.hasilEssay', ['essays' => $essays]);
    }

    public function hasilEssayDetail(String $id){
      $essay = Essay::where('id', $id)->first();  
      $user = User::where('id', $essay->user_id)->first();
      $question1 = Question::where('id', $essay->question1_id)->first();
      $question2 = Question::where('id', $essay->question2_id)->first();
      $question3 = Question::where('id', $essay->question3_id)->first();
      $question4 = Question::where('id', $essay->question4_id)->first();
      $question5 = Question::where('id', $essay->question5_id)->first();

      $result = (object) [
        'question1' => $question1->question,
        'answer1' => $essay->answer1,
        'question2' => $question2->question,
        'answer2' => $essay->answer2,
        'question3' => $question3->question,
        'answer3' => $essay->answer3,
        'question4' => $question4->question,
        'answer4' => $essay->answer4,
        'question5' => $question5->question,
        'answer5' => $essay->answer5,
      ];

      return response()->view('admin.essay.hasilEssayDetail', [
        'user' => $user->name, 
        'result' => $result
      ]);
    }

    public function export()
    {
      return Excel::download(new QuizExport, 'hasil.xlsx');
    }
}
