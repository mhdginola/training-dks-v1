<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questions = Question::orderby('updated_at', 'DESC')->paginate(10);
        
        return response()->view('admin.questions.list', [
            'questions' => $questions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()->view('admin.questions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pin = mt_rand(1000000, 9999999);
        $generateId = str_shuffle($pin);

        $checklists = [0,0,0,0];

        for ($i = 0; $i < 4; $i++) {
            if($i == $request->input('check')){
                $checklists[$i] = 1;
            }
        }

        $question = new Question;

        $question->id = $generateId;
        $question->question = $request->input('question');
        $question->id_day = $request->input('id_day');

        $question->save();

        Answer::insert([
            [
                'answer' => $request->input('answer1'),
                'checklist' => $checklists[0],
                'question_id' => $generateId,
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ],
            [
                'answer' => $request->input('answer2'),
                'checklist' => $checklists[1],
                'question_id' => $generateId,
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ],
            [
                'answer' => $request->input('answer3'),
                'checklist' => $checklists[2],
                'question_id' => $generateId,
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ],
            [
                'answer' => $request->input('answer4'),
                'checklist' => $checklists[3],
                'question_id' => $generateId,
                'created_at'=> date('Y-m-d H:i:s'),
                'updated_at'=> date('Y-m-d H:i:s')
            ],
        ]);

        return response()->view('admin.questions.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $question = Question::where('id', $id)->first();
        $answer = Answer::where('question_id', $id)->get();

        for ($i = 0; $i < 4; $i++) {
            if($answer[$i]->checklist == 1){
                $checklist = $i;
            }
        }

        return response()->view('admin.questions.update', [
            'question_id' => $id,
            'question' => $question->question,
            'id_day' => $question->id_day,
            'answer1' => $answer[0]->answer,
            'answer1_id' => $answer[0]->id,
            'answer2' => $answer[1]->answer,
            'answer2_id' => $answer[1]->id,
            'answer3' => $answer[2]->answer,
            'answer3_id' => $answer[2]->id,
            'answer4' => $answer[3]->answer,
            'answer4_id' => $answer[3]->id,
            'checklist' => $checklist,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $checklists = [0,0,0,0];

        for ($i = 0; $i < 4; $i++) {
            if($i == $request->input('check')){
                $checklists[$i] = 1;
            }
        }

        $question = Question::find($id);

        $question->question = $request->input('question');
        $question->id_day = $request->input('id_day');
        $question->updated_at = date('Y-m-d H:i:s');

        $question->save();

        $answer1 = Answer::find($request->input('answer1_id'));
        $answer1->answer = $request->input('answer1'); 
        $answer1->checklist = $checklists[0];
        $answer1->updated_at = date('Y-m-d H:i:s');
        $answer1->save();

        $answer2 = Answer::find($request->input('answer2_id'));
        $answer2->answer = $request->input('answer2'); 
        $answer2->checklist = $checklists[1];
        $answer2->updated_at = date('Y-m-d H:i:s');
        $answer2->save();

        $answer3 = Answer::find($request->input('answer3_id'));
        $answer3->answer = $request->input('answer3'); 
        $answer3->checklist = $checklists[2];
        $answer3->updated_at = date('Y-m-d H:i:s');
        $answer3->save();

        $answer4 = Answer::find($request->input('answer4_id'));
        $answer4->answer = $request->input('answer4'); 
        $answer4->checklist = $checklists[3];
        $answer4->updated_at = date('Y-m-d H:i:s');
        $answer4->save();
        

        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
