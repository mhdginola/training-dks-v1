<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

class UserController extends Controller
{
    private UserService $userService;

    public function __construct(UserService $userService)
    {
      $this->userService = $userService;
    }

    public function login():Response{
      return response()
        ->view("user.login", [
          "title" => "Login"
        ]);
    }

    public function doLogin(Request $request): Response | RedirectResponse{
      $validateData = $request->validate([
        'email' => 'required|exists:users,email',
        'password' => 'required'
      ]);

      $user = $request->input('email');
      $password = $request->input('password');
      $credential = [
        'email' => $user,
        'password' => $password
      ];

      if(Auth::attempt($credential)){
        $dt = User::where('email', $user)->first();
        $request->session()->put("user", $user);
        $request->session()->put("userId", $dt->id);
        $request->session()->put("isAdmin", $dt->isAdmin);
        if($dt->isAdmin){
          return redirect('/admin/dashboard');
        }
        else {
          return redirect('/dashboard');
        }
      }

      return back()->withInput([
        "email" => $request->input('email')
      ])->withErrors([
        "title" => "Login",
        "password" => "Wrong Password"
      ]);
    }

    public function doLogout(Request $request): RedirectResponse{
      Auth::logout(); 
      $request->session()->flush();
      // $request->session()->invalidate();
      // $request->session()->regenerateToken();
      // $request->session()->forget("user");
      // $request->session()->forget("userId");
      // $request->session()->forget("isAdmin");
      return redirect('/');
    }

    public function register():Response{
      return response()
        ->view("admin.users.add");
    }

    public function doRegister(Request $request):RedirectResponse
    {      
      $validateData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|unique:users,email|email:rfc,dns',
        'password' => ['required', Password::min(8)->numbers()],
        'image' => 'required|mimes:jpeg,jpg,png'
      ]);

      $image = $request->file('image');

      $imageName = Str::random(10) . '-' . $image->getClientOriginalName();
      $image->storeAs('images/profil', $imageName, 'local');
      $validateData['level'] = 1;
      $validateData['password'] = Hash::make($request->input('password'));
      $validateData['image'] = $imageName;

      User::create($validateData);

      return redirect('/admin/users');
    }

    public function listUser(){
      $users = User::orderby('updated_at', 'DESC')->paginate(10);
      return view('admin.users.list', ['users' => $users]);
    }

    public function profilePic(Request $request){
      $user = User::where('id', $request->session()->get('userId'))->first();
      return response()
      ->file(storage_path('app/images/profil/' .$user->image));;
    }

    public function userDetail(){
      return view('user.detail');
    }

    public function userEdit(){
      return view('user.edit');
    }

    public function userUpdate(Request $request){
      $validateData = $request->validate([
        'name' => 'required|max:255',
        'password' => 'required|confirmed'
      ]);

      if($request->has('password')){
        $validateData['password'] = Hash::make($request->input('password'));
      }
      
      if($request->has('image')){
        $validateData['image'] = $request->validate([
          'image' => 'mimes:jpeg,jpg,png'
        ]);
        $image = $request->file('image');
        $imageName = Str::random(10) . '-' . $image->getClientOriginalName();
        $image->storeAs('images/profil', $imageName, 'local');
        $validateData['image'] = $imageName;
      }
      

      User::where('id', $request->session()->get('userId'))->update($validateData);
      return view('user.detail');
    }

    public function userAdminUpdate(String $id){
      $user = User::where('id', $id)->first();
      return response()->view('admin.users.edit', ['user' => $user]);
    }

    public function userAdminUpdatePost(Request $request){
      $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:rfc,dns',
        'level' => 'required'
      ]);
      $user = User::find($request->input('user_id'));

      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->level = $request->input('level');

      $user->save();

      return redirect()->route('totalUser');
    }

    public function resetPassword(Request $request){
      $generatePassword = Str::random(8);

      $user = User::find($request->input('user_id'));

      $user->password = Hash::make($generatePassword);

      $user->save();

      return redirect()->route('users.index')->with('passGen', $generatePassword);
    }
}
