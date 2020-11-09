<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\StoreUsersRequest;
use App\Http\Requests\Users\UpdateUsersRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Show all users and manage
        return view('admin.users.index', ['users' => User::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Go to users creation form
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUsersRequest $request)
    {
        // store users
        $users = User::create($request->only('name', 'email', 'password', 'role'));

        $hashed = Hash::make($request->get('password'));
        $users->update(['password' => $hashed]);


        return redirect()->route('admin.users.dashboard')->with('success', 'Succesfully created a new User');

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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$request->id,
            'password' => 'required',
            'role' => 'nullable',
        ]);

        $user = User::find($request->id);
        $hashed = $hashed = Hash::make($request->password);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $hashed;

        $user->save();

        return redirect()->route('admin.users.dashboard')->with('success', 'Succesfully updated User with ID: '.$request->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->id != auth()->user()->id){
            $user = User::find($request->id);
            $user->delete();
            return redirect()->route('admin.users.dashboard')->with('success', 'Succesfully deleted User with ID: '.$request->id);
        }
        return redirect()->route('admin.users.dashboard')->with('error', 'Can´t delete current authenticated User');
    }
}
