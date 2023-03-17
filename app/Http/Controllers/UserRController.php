<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

class UserRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::orderby('updated_at', 'DESC')->paginate(10);
        return view('admin.users.list', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return response()
        ->view("admin.users.add");
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

        return redirect()->route('users.index');
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
        $user = User::where('id', $id)->first();
        return response()->view('admin.users.edit', ['user' => $user]);
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
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:rfc,dns',
            'level' => 'required'
        ]);
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->level = $request->input('level');

        $user->save();

        return redirect()->route('users.index');
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
