<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EssayRController;
use App\Http\Controllers\FileListController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\PresentationController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionRController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRController;
use App\Http\Controllers\VideoController;
use App\Http\Middleware\Level10Middleware;
use App\Http\Middleware\Level11Middleware;
use App\Http\Middleware\Level12Middleware;
use App\Http\Middleware\Level13Middleware;
use App\Http\Middleware\Level14Middleware;
use App\Http\Middleware\Level15Middleware;
use App\Http\Middleware\Level1Middleware;
use App\Http\Middleware\Level2Middleware;
use App\Http\Middleware\Level3Middleware;
use App\Http\Middleware\Level4Middleware;
use App\Http\Middleware\Level5Middleware;
use App\Http\Middleware\Level6Middleware;
use App\Http\Middleware\Level7Middleware;
use App\Http\Middleware\Level8Middleware;
use App\Http\Middleware\Level9Middleware;
use App\Http\Middleware\OnlyAdminMiddleware;
use App\Http\Middleware\OnlyGuestMiddleware;
use App\Http\Middleware\OnlyMemberMiddleware;
use App\Http\Middleware\QuizMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function(){
  $nilai = round( (1*100)/1 );
  return $nilai;
});

Route::get('/', [HomeController::class, 'home']);

Route::view('/template', 'template');

Route::controller(UserController::class)->group(function(){
  Route::middleware(OnlyGuestMiddleware::class)->group(function(){
    Route::get('/login', 'login');
    Route::post('/login', 'doLogin');
  });
  // Route::get('/register', 'register');
  // Route::post('/register', 'doRegister');
});

Route::middleware(OnlyAdminMiddleware::class)->group(function(){
  Route::prefix('/admin')->group(function(){
    Route::resource('users', UserRController::class)->except(['show', 'destroy']);
    Route::resource('questions', QuestionRController::class)->except(['show', 'delete']);
    Route::resource('essays', EssayRController::class)->except(['index', 'show', 'destroy']);

    Route::view('/dashboard', 'admin.dashboard')->name('adminDashboard');
    Route::get('/document', [UploadController::class, 'indexVideoAdmin'])->name('adminDocument');
    Route::post('/user/pass/reset', [UserController::class, 'resetPassword'])->name('resetPassword');
    Route::get('/hasilQuiz', [HasilController::class, 'hasilQuizAdmin'])->name('hasilQuizAdmin');
    Route::get('/hasilEssay', [HasilController::class, 'hasilEssay'])->name('hasilEssay');
    Route::get('/hasilEssay/{id}', [HasilController::class, 'hasilEssayDetail'])->name('hasilEssayDetail');
    Route::get('/materis', [MateriController::class, 'index'])->name('materiList');
    Route::get('/materi/add', [MateriController::class, 'indexAdd'])->name('materiListAdd');
    Route::post('/materi/add', [MateriController::class, 'store']);
    // Route::get('/users',[UserController::class, 'listUser'])->name('totalUser');
    // Route::get('/user/add',[UserController::class, 'register'])->name('userAdd');
    // Route::post('/user/add',[UserController::class, 'doRegister'])->name('userAddPost');
    // Route::get('/user/update/{id}',[UserController::class, 'userAdminUpdate'])->name('userAdminUpdate');
    // Route::post('/user/update',[UserController::class, 'userAdminUpdatePost'])->name('userAdminUpdatePost');
    // Route::get('/question/add', [QuestionController::class, 'questionAdd'])->name('questionAdd');
    // Route::get('/question/{id}', [QuestionController::class, 'questionUpdate'])->name('questionUpdate');
    // Route::post('/question/update', [QuestionController::class, 'questionUpdatePost'])->name('questionUpdatePost');
    // Route::post('/question/add', [QuestionController::class, 'questionPost'])->name('questionPost');
    // Route::get('/questions', [QuestionController::class, 'questionList'])->name('questionList');
    // Route::get('/essay/add', [QuestionController::class, 'essayAdd'])->name('essayAdd');
    // Route::post('/essay/add', [QuestionController::class, 'essayAddPost'])->name('essayAddPost');
    // Route::get('/essay/update/{id}', [QuestionController::class, 'essayUpdate'])->name('essayUpdate');
    // Route::post('/essay/update', [QuestionController::class, 'essayUpdatePost'])->name('essayUpdatePost');
  });
});

Route::middleware(OnlyMemberMiddleware::class)->group(function(){
  Route::post('/logout', [UserController::class ,'doLogout'])->name('logout');
  Route::get('/dashboard', [QuizController::class, 'dashboard'])->name('dashboard');
  Route::get('/profile', [UserController::class, 'profilePic'])->name('profilePic');
  Route::get('/user/detail', [UserController::class, 'userDetail'])->name('userDetail');
  Route::get('/user/edit', [UserController::class, 'userEdit'])->name('userEdit');
  Route::post('/user/update', [UserController::class, 'userUpdate'])->name('userUpdate');
  Route::get('/materi', [LevelController::class, 'materi'])->name('materi');
  Route::get('/quizList', [LevelController::class, 'quizList'])->name('quizList');
  Route::view('/error', 'quiz.error')->name('quizError');
  Route::get('/hasil', [HasilController::class, 'index'])->name('hasil');
  Route::get('/hasil/export',[HasilController::class, 'export'])->name('exportHasil');
  Route::get('/presentation', [PresentationController::class, 'file_preview']);
  Route::get('/quiz/essay', [QuizController::class, 'essay'])->name('quiz.essay');
  Route::post('/quiz/essay', [QuizController::class, 'essayPost']);
  Route::get('/companyProfile', function(){
    return response()
    ->file(storage_path('app/videos/company_profile/company_profile.mp4'));
  })->name('companyProfile');
  
  Route::controller(FileListController::class)->group(function(){
    Route::get('/list/video', 'listVideo')->name('listVideo');
    Route::get('/list/video/download/{id}', 'downloadVideo')->name('downloadVideo');
  });

  Route::controller(DownloadController::class)->group(function(){
    Route::prefix('/download')->group(function(){
      Route::get('/video', 'downloadVideo')->name('downloadVideo');
    });
  });

  Route::controller(UploadController::class)->group(function(){
    Route::prefix('/upload')->group(function(){
      Route::get('/video', 'indexVideo')->name('uploadVideo');
      Route::post('/video', 'storeVideo')->name('storeVideo');
      Route::get('/ppt', 'indexPpt')->name('uploadPpt');
      Route::post('/ppt', 'storePpt')->name('storePpt');
    });
  });

  Route::middleware(Level1Middleware::class)->group(function(){
    Route::prefix('/day1')->group(function (){
      Route::view('/a1', 'day1.a1')->name('day1.a1');
      Route::view('/a2', 'day1.a2')->name('day1.a2');
      Route::view('/a3', 'day1.a3')->name('day1.a3');
      Route::view('/a4', 'day1.a4')->name('day1.a4');
      Route::view('/a5', 'day1.a5')->name('day1.a5');
      Route::view('/a6', 'day1.a6')->name('day1.a6');
      Route::view('/a7s', 'day1.a7s')->name('day1.a7s');
      Route::get('/vid1', [VideoController::class, 'day1vid1'])->name('day1.vid1');
      Route::get('/vid2', [VideoController::class, 'day1vid2'])->name('day1.vid2');
      Route::get('/vid3', [VideoController::class, 'day1vid3'])->name('day1.vid3');
      Route::get('/vid4', [VideoController::class, 'day1vid4'])->name('day1.vid4');
      Route::get('/vid5', [VideoController::class, 'day1vid5'])->name('day1.vid5');
      Route::get('/vid6', [VideoController::class, 'day1vid6'])->name('day1.vid6');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day1', [QuizController::class, 'show'])->name('quiz.day1');
        Route::post('/day1', [QuizController::class, 'store'])->name('quiz.day1post');  
      });
    });
  });

  Route::middleware(Level2Middleware::class)->group(function(){
    Route::prefix('/day2')->group(function (){
      Route::view('/a1', 'day2.a1')->name('day2.a1');
      Route::view('/a2', 'day2.a2')->name('day2.a2');
      Route::view('/a3', 'day2.a3')->name('day2.a3');
      Route::view('/a4', 'day2.a4')->name('day2.a4');
      Route::view('/a5', 'day2.a5')->name('day2.a5');
      Route::view('/a6', 'day2.a6')->name('day2.a6');
      // Route::get('/vid1', [VideoController::class, 'day3vid1'])->name('day3.vid1');
      Route::get('/vid2', [VideoController::class, 'day3vid2'])->name('day3.vid2');
      Route::get('/vid3', [VideoController::class, 'day3vid3'])->name('day3.vid3');
      Route::get('/vid4', [VideoController::class, 'day3vid4'])->name('day3.vid4');
      Route::get('/vid5', [VideoController::class, 'day3vid5'])->name('day3.vid5');
      Route::get('/vid6', [VideoController::class, 'day3vid6'])->name('day3.vid6');
      Route::get('/vid1', function(){
        return response()
        ->file(storage_path('app/videos/materi_day1/materi_brosur.mp4'));
      })->name('day2.vid1');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function(){
        Route::get('/day2', [QuizController::class, 'show'])->name('quiz.day2');
        Route::post('/day2', [QuizController::class, 'store'])->name('quiz.day2post');
      });
    });
  });

  Route::middleware(Level3Middleware::class)->group(function(){
    Route::prefix('/day3')->group(function (){
      Route::view('/a1', 'day3.a1')->name('day3.a1');
      Route::view('/a2', 'day3.a2')->name('day3.a2');
      Route::view('/a3', 'day3.a3')->name('day3.a3');
      Route::view('/a4', 'day3.a4')->name('day3.a4');
      Route::view('/a5', 'day3.a5')->name('day3.a5');
      Route::view('/a6', 'day3.a6')->name('day3.a6');
      Route::get('/vid1', [VideoController::class, 'day3vid1'])->name('day3.vid1');
      Route::get('/vid2', [VideoController::class, 'day3vid2'])->name('day3.vid2');
      Route::get('/vid3', [VideoController::class, 'day3vid3'])->name('day3.vid3');
      Route::get('/vid4', [VideoController::class, 'day3vid4'])->name('day3.vid4');
      Route::get('/vid5', [VideoController::class, 'day3vid5'])->name('day3.vid5');
      Route::get('/vid6', [VideoController::class, 'day3vid6'])->name('day3.vid6');
      // Route::get('/vid1', function(){
      //   return response()
      //   ->file(storage_path('app/public/test.mp4'));
      // })->name('day3.vid1');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day3', [QuizController::class, 'show'])->name('quiz.day3');
        Route::post('/day3', [QuizController::class, 'store'])->name('quiz.day3post');
      });
    });
  });

  Route::middleware(Level4Middleware::class)->group(function(){
    Route::prefix('/day4')->group(function (){
      Route::view('/a1', 'day4.a1')->name('day4.a1');
      Route::view('/a2', 'day4.a2')->name('day4.a2');
      Route::view('/a3', 'day4.a3')->name('day4.a3');
      Route::view('/a4', 'day4.a4')->name('day4.a4');
      Route::view('/a5', 'day4.a5')->name('day4.a5');
      Route::view('/a6', 'day4.a6')->name('day4.a6');
      Route::get('/vid1', [VideoController::class, 'day4vid1'])->name('day4.vid1');
      Route::get('/vid2', [VideoController::class, 'day4vid2'])->name('day4.vid2');
      Route::get('/vid3', [VideoController::class, 'day4vid3'])->name('day4.vid3');
      Route::get('/vid4', [VideoController::class, 'day4vid4'])->name('day4.vid4');
      Route::get('/vid5', [VideoController::class, 'day4vid5'])->name('day4.vid5');
      Route::get('/vid6', [VideoController::class, 'day4vid6'])->name('day4.vid6');
      // Route::get('/vid1', function(){
      //   return response()
      //   ->file(storage_path('app/public/test.mp4'));
      // })->name('day4.vid1');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day4', [QuizController::class, 'show'])->name('quiz.day4');
        Route::post('/day4', [QuizController::class, 'store'])->name('quiz.day4post');
      });
    });
  });

  Route::middleware(Level5Middleware::class)->group(function(){
    Route::prefix('/day5')->group(function (){
      Route::view('/a1', 'day5.a1')->name('day5.a1');
      Route::view('/a2', 'day5.a2')->name('day5.a2');
      Route::view('/a3', 'day5.a3')->name('day5.a3');
      Route::view('/a4', 'day5.a4')->name('day5.a4');
      Route::view('/a5', 'day5.a5')->name('day5.a5');
      Route::view('/a6s', 'day5.a6s')->name('day5.a6s');
      Route::get('/vid1', [VideoController::class, 'day5vid1'])->name('day5.vid1');
      Route::get('/vid2', [VideoController::class, 'day5vid2'])->name('day5.vid2');
      Route::get('/vid3', [VideoController::class, 'day5vid3'])->name('day5.vid3');
      Route::get('/vid4', [VideoController::class, 'day5vid4'])->name('day5.vid4');
      Route::get('/vid5', [VideoController::class, 'day5vid5'])->name('day5.vid5');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day5', [QuizController::class, 'show'])->name('quiz.day5');
        Route::post('/day5', [QuizController::class, 'store'])->name('quiz.day5post');
      });
    });
  });

  Route::middleware(Level6Middleware::class)->group(function(){
    Route::prefix('/day6')->group(function (){
      Route::view('/a1', 'day6.a1')->name('day6.a1');
      Route::view('/a2', 'day6.a2')->name('day6.a2');
      Route::view('/a3', 'day6.a3')->name('day6.a3');
      Route::view('/a4', 'day6.a4')->name('day6.a4');
      Route::view('/a5', 'day6.a5')->name('day6.a5');
      Route::view('/a6s', 'day6.a6s')->name('day6.a6s');
      Route::get('/vid1', [VideoController::class, 'day6vid1'])->name('day6.vid1');
      Route::get('/vid2', [VideoController::class, 'day6vid2'])->name('day6.vid2');
      Route::get('/vid3', [VideoController::class, 'day6vid3'])->name('day6.vid3');
      Route::get('/vid4', [VideoController::class, 'day6vid4'])->name('day6.vid4');
      Route::get('/vid5', [VideoController::class, 'day6vid5'])->name('day6.vid5');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day6', [QuizController::class, 'show'])->name('quiz.day6');
        Route::post('/day6', [QuizController::class, 'store'])->name('quiz.day6post');  
      });
    });
  });

  Route::middleware(Level7Middleware::class)->group(function(){
    Route::prefix('/day7')->group(function (){
      Route::view('/a1', 'day7.a1')->name('day7.a1');
      Route::view('/a2', 'day7.a2')->name('day7.a2');
      Route::view('/a3', 'day7.a3')->name('day7.a3');
      Route::view('/a4', 'day7.a4')->name('day7.a4');
      Route::view('/a5', 'day7.a5')->name('day7.a5');
      Route::view('/a6', 'day7.a6')->name('day7.a6');
      Route::view('/a7', 'day7.a7')->name('day7.a7');
      Route::view('/a8', 'day7.a8')->name('day7.a8');
      Route::view('/a9', 'day7.a9')->name('day7.a9');
      Route::view('/a10s', 'day7.a10s')->name('day7.a10s');
      Route::get('/vid1', [VideoController::class, 'day7vid1'])->name('day7.vid1');
      Route::get('/vid2', [VideoController::class, 'day7vid2'])->name('day7.vid2');
      Route::get('/vid3', [VideoController::class, 'day7vid3'])->name('day7.vid3');
      Route::get('/vid4', [VideoController::class, 'day7vid4'])->name('day7.vid4');
      Route::get('/vid5', [VideoController::class, 'day7vid5'])->name('day7.vid5');
      Route::get('/vid6', [VideoController::class, 'day7vid6'])->name('day7.vid6');
      Route::get('/vid7', [VideoController::class, 'day7vid7'])->name('day7.vid7');
      Route::get('/vid8', [VideoController::class, 'day7vid8'])->name('day7.vid8');
      Route::get('/vid9', [VideoController::class, 'day7vid9'])->name('day7.vid9');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day7', [QuizController::class, 'show'])->name('quiz.day7');
        Route::post('/day7', [QuizController::class, 'store'])->name('quiz.day7post');  
      });
    });
  });

  
  Route::middleware(Level8Middleware::class)->group(function(){
    Route::prefix('/day8')->group(function (){
      Route::view('/a1', 'day8.a1')->name('day8.a1');
      Route::view('/a2', 'day8.a2')->name('day8.a2');
      Route::view('/a3', 'day8.a3')->name('day8.a3');
      Route::view('/a4', 'day8.a4')->name('day8.a4');
      Route::view('/a5', 'day8.a5')->name('day8.a5');
      Route::view('/a6s', 'day8.a6s')->name('day8.a6s');
      Route::get('/vid1', [VideoController::class, 'day8vid1'])->name('day8.vid1');
      Route::get('/vid2', [VideoController::class, 'day8vid2'])->name('day8.vid2');
      Route::get('/vid3', [VideoController::class, 'day8vid3'])->name('day8.vid3');
      Route::get('/vid4', [VideoController::class, 'day8vid4'])->name('day8.vid4');
      Route::get('/vid5', [VideoController::class, 'day8vid5'])->name('day8.vid5');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day8', [QuizController::class, 'show'])->name('quiz.day8');
        Route::post('/day8', [QuizController::class, 'store'])->name('quiz.day8post');  
      });
    });
  });

  Route::middleware(Level9Middleware::class)->group(function(){
    Route::prefix('/day9')->group(function (){
      Route::view('/a1', 'day9.a1')->name('day9.a1');
      Route::view('/a2', 'day9.a2')->name('day9.a2');
      Route::view('/a3', 'day9.a3')->name('day9.a3');
      Route::view('/a4', 'day9.a4')->name('day9.a4');
      Route::view('/a5', 'day9.a5')->name('day9.a5');
      Route::view('/a6s', 'day9.a6s')->name('day9.a6s');
      Route::get('/vid1', [VideoController::class, 'day9vid1'])->name('day9.vid1');
      Route::get('/vid2', [VideoController::class, 'day9vid2'])->name('day9.vid2');
      Route::get('/vid3', [VideoController::class, 'day9vid3'])->name('day9.vid3');
      Route::get('/vid4', [VideoController::class, 'day9vid4'])->name('day9.vid4');
      Route::get('/vid5', [VideoController::class, 'day9vid5'])->name('day9.vid5');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day9', [QuizController::class, 'show'])->name('quiz.day9');
        Route::post('/day9', [QuizController::class, 'store'])->name('quiz.day9post');  
      });
    });
  });

  Route::middleware(Level10Middleware::class)->group(function(){
    Route::prefix('/day10')->group(function(){
      Route::view('/a1', 'day10.a1')->name('day10.a1');
      Route::view('/a2', 'day10.a2')->name('day10.a2');
      Route::view('/a3', 'day10.a3')->name('day10.a3');
      Route::get('/vid1', [VideoController::class, 'day10vid1'])->name('day10.vid1');
      Route::get('/vid2', [VideoController::class, 'day10vid2'])->name('day10.vid2');
      Route::get('/vid3', [VideoController::class, 'day10vid3'])->name('day10.vid3');
      Route::view('/upload', 'day10.upload')->name('day10.upload');
      Route::post('/upload', [ImportController::class, 'day10post']);
    });
  }); 

  Route::middleware(Level11Middleware::class)->group(function(){
    Route::prefix('/day11')->group(function (){
      Route::view('/a1', 'day11.a1')->name('day11.a1');
      Route::view('/a2', 'day11.a2')->name('day11.a2');
      Route::view('/a3', 'day11.a3')->name('day11.a3');
      Route::view('/a4', 'day11.a4')->name('day11.a4');
      Route::view('/a5', 'day11.a5')->name('day11.a5');
      Route::view('/a6', 'day11.a6')->name('day11.a6');
      Route::view('/a7', 'day11.a7')->name('day11.a7');
      Route::get('/vid1', [VideoController::class, 'day11vid1'])->name('day11.vid1');
      Route::get('/vid2', [VideoController::class, 'day11vid2'])->name('day11.vid2');
      Route::get('/vid3', [VideoController::class, 'day11vid3'])->name('day11.vid3');
      Route::get('/vid4', [VideoController::class, 'day11vid4'])->name('day11.vid4');
      Route::get('/vid5', [VideoController::class, 'day11vid5'])->name('day11.vid5');
      Route::get('/vid6', [VideoController::class, 'day11vid6'])->name('day11.vid6');
      Route::get('/vid7', [VideoController::class, 'day11vid7'])->name('day11.vid7');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day11', [QuizController::class, 'show'])->name('quiz.day11');
        Route::post('/day11', [QuizController::class, 'store'])->name('quiz.day11post');  
      });
    });
  });

  Route::middleware(Level12Middleware::class)->group(function(){
    Route::prefix('/day12')->group(function (){
      Route::view('/a1', 'day12.a1')->name('day12.a1');
      Route::view('/a2', 'day12.a2')->name('day12.a2');
      Route::view('/a3', 'day12.a3')->name('day12.a3');
      Route::view('/a4', 'day12.a4')->name('day12.a4');
      Route::get('/vid1', [VideoController::class, 'day12vid1'])->name('day12.vid1');
      Route::get('/vid2', [VideoController::class, 'day12vid2'])->name('day12.vid2');
      Route::get('/vid3', [VideoController::class, 'day12vid3'])->name('day12.vid3');
      Route::get('/vid4', [VideoController::class, 'day12vid4'])->name('day12.vid4');
      Route::view('/upload', 'day12.upload')->name('day12.upload');
      Route::post('/upload', [ImportController::class, 'day12post']);
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day12', [QuizController::class, 'show'])->name('quiz.day12');
        Route::post('/day12', [QuizController::class, 'store'])->name('quiz.day12post');  
      });
    });
  });
  
  Route::middleware(Level13Middleware::class)->group(function(){
    Route::prefix('/day13')->group(function (){
      Route::view('/a1', 'day13.a1')->name('day13.a1');
      Route::get('/vid1', [VideoController::class, 'day13vid1'])->name('day13.vid1');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day13', [QuizController::class, 'show'])->name('quiz.day13');
        Route::post('/day13', [QuizController::class, 'store'])->name('quiz.day13post');  
      });
    });
  });

  Route::middleware(Level14Middleware::class)->group(function(){
    Route::prefix('/day14')->group(function (){
      Route::view('/a1', 'day14.a1')->name('day14.a1');
      Route::view('/a2', 'day14.a2')->name('day14.a2');
      Route::view('/a3', 'day14.a3')->name('day14.a3');
      Route::get('/vid1', [VideoController::class, 'day14vid1'])->name('day14.vid1');
      Route::get('/vid2', [VideoController::class, 'day14vid2'])->name('day14.vid2');
      Route::get('/vid3', [VideoController::class, 'day14vid3'])->name('day14.vid3');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day14', [QuizController::class, 'show'])->name('quiz.day14');
        Route::post('/day14', [QuizController::class, 'store'])->name('quiz.day14post');  
      });
    });
  });
  
  Route::middleware(Level15Middleware::class)->group(function(){
    Route::prefix('/day15')->group(function (){
      Route::view('/a1', 'day15.a1')->name('day15.a1');
      Route::get('/vid1', [VideoController::class, 'day15vid1'])->name('day15.vid1');
    });
    Route::prefix('/quiz')->group(function (){
      Route::middleware(QuizMiddleware::class)->group(function (){
        Route::get('/day15', [QuizController::class, 'show'])->name('quiz.day15');
        Route::post('/day15', [QuizController::class, 'store'])->name('quiz.day15post');  
      });
    });
  });
});