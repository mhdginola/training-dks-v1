<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Essay;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class QuizController extends Controller
{
    public function show(Request $request):Response{
      $user_id = $request->session()->get('userId');
      $user = User::where('id', $user_id)->first();

      $questions = Question::where('id_day', $user->level)->get();

      $check = Quiz::where('user_id', $user_id)->where('created_at', '>=', Carbon::today())->where('id_day', $user->level)->get();

      if(!$request->session()->has('quizTimeout')){
        $request->session()->put("quizTimeout", (round(microtime(true) * 1000)+(1*60*60*1000)));
      }
      
      $limit = $request->session()->get('quizTimeout');

      return response()->view('quiz.show', [
          'questions' => $questions->shuffle(),
          'data_test' => $check,
          'gg' => $limit,
          'level' => $user->level
      ]);
    }

    public function store(Request $request):RedirectResponse{
      $user_id = $request->session()->get('userId');
      $user = User::where('id', $user_id)->first();

      $benar = 0;
      $data = Question::where('id_day', $user->level)->get();

      foreach ($data as $dt) {
        $isi = Answer::where('id', $request->input($dt->id))->first();

        if($isi){
          $benar += $isi->checklist;
        }
      }

      $count_data = count($data);

      $nilai = round( ($benar*100)/$count_data );

      $quiz = new Quiz;
      $quiz->user_id = $request->session()->get('userId');
      $quiz->id_day = $user->level;
      $quiz->benar = $benar;
      $quiz->salah = count($data) - $benar;
      $quiz->nilai = $nilai;
      $quiz->save();

      if($nilai >= 80){
        User::where('id', $request->session()->get('userId'))->update(['level' => ($user->level+1)]);
      }
      $request->session()->forget('quizTimeout');

      return redirect()->route('hasil');
    }

    public function dashboard(Request $request){
      $qDay1 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 1)->orderBy('nilai', 'desc')->first();
      $qDay2 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 2)->orderBy('nilai', 'desc')->first();
      $qDay3 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 3)->orderBy('nilai', 'desc')->first();
      $qDay4 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 4)->orderBy('nilai', 'desc')->first();
      $qDay5 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 5)->orderBy('nilai', 'desc')->first();
      $qDay6 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 6)->orderBy('nilai', 'desc')->first();
      $qDay7 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 7)->orderBy('nilai', 'desc')->first();
      $qDay8 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 8)->orderBy('nilai', 'desc')->first();
      $qDay9 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 9)->orderBy('nilai', 'desc')->first();
      $qDay10 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 10)->orderBy('nilai', 'desc')->first();
      $qDay11 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 11)->orderBy('nilai', 'desc')->first();
      $qDay12 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 12)->orderBy('nilai', 'desc')->first();
      $qDay13 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 13)->orderBy('nilai', 'desc')->first();
      $qDay14 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 14)->orderBy('nilai', 'desc')->first();
      $qDay15 = Quiz::where('user_id', $request->session()->get('userId'))->where('id_day', 15)->orderBy('nilai', 'desc')->first();
      $user = User::where('id', $request->session()->get('userId'))->first();
      return view('dashboard', [
        'user' => $user,
        'qDay1' => $qDay1, 
        'qDay2' => $qDay2, 
        'qDay3' => $qDay3, 
        'qDay4' => $qDay4, 
        'qDay5' => $qDay5,
        'qDay6' => $qDay6,
        'qDay7' => $qDay7,
        'qDay8' => $qDay8,
        'qDay9' => $qDay9,
        'qDay10' => $qDay10,
        'qDay11' => $qDay11, 
        'qDay12' => $qDay12, 
        'qDay13' => $qDay13, 
        'qDay14' => $qDay14, 
        'qDay15' => $qDay15,
      ]);
    }

    public function essay(Request $request){
      $questions = Question::where('id_day', 'essay')->get();

      $check = Quiz::where('user_id', $request->session()->get('userId'))->where('created_at', '>=', Carbon::today())->where('id_day', '2')->get();

      if(!$request->session()->has('quizTimeout')){
        $request->session()->put("quizTimeout", (round(microtime(true) * 1000)+(1*60*60*1000)));
      }

      $limit = $request->session()->get('quizTimeout');

      return response()->view('quiz.day5essay', [
          'questions' => $questions->shuffle(),
          'data_test' => $check,
          'gg' => $limit,
        ]);
    }

    public function essayPost(Request $request):RedirectResponse{
      $essay = new Essay;
      $essay->user_id = $request->session()->get('userId');
      $essay->question1_id = $request->input('question1');
      $essay->answer1 = $request->input('answer1');
      $essay->question2_id = $request->input('question2');
      $essay->answer2 = $request->input('answer2');
      $essay->question3_id = $request->input('question3');
      $essay->answer3 = $request->input('answer3');
      $essay->question4_id = $request->input('question4');
      $essay->answer4 = $request->input('answer4');
      $essay->question5_id = $request->input('question5');
      $essay->answer5 = $request->input('answer5');
      $essay->save();

      $request->session()->forget('quizTimeout');

      return redirect()->route('hasil');
    }
}
