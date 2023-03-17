<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function home(Request $request): RedirectResponse
    {
      if($request->session()->get('isAdmin') === true){
        return redirect('/admin/dashboard');
      } 

      if($request->session()->exists("userId")){
        return redirect('/dashboard');
      }

      else{
        return redirect('/login');
      }
    }
}
