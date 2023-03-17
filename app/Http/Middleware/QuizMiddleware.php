<?php

namespace App\Http\Middleware;

use App\Models\Quiz;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;

class QuizMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      $user = User::where('id', $request->session()->get('userId'))->first();
      $check = Quiz::where('user_id', $request->session()->get('userId'))->where('created_at', '>=', Carbon::today())->where('id_day', $user->level )->first();
      if($check === null)
      {
        return $next($request);
      } 
      else
      {
        $date = Carbon::createFromFormat('Y-m-d H:i:s',$check->created_at);
        $date_time_zone = $date->setTimezone("Asia/Jakarta");
        
        return redirect()->route('quizError')->with(['date' => $date_time_zone]);
        // abort(403);
      }
    }
}
