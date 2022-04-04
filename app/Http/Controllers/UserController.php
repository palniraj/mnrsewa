<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $pendingUser = User::where('status', 'pending')->get();
        $approvedUser = User::where('status', 'approved')->get();
        $rejectedUser = User::where('status', 'rejected')->get();
        return view('admin.user.index')->with([
            'roles' => $roles,
            'pendingUser' => $pendingUser,
            'approvedUser' => $approvedUser,
            'rejectedUser' => $rejectedUser,
            'pendingCount' => User::where('status', 'pending')->count(),
            'approvedCount' => User::where('status', 'approved')->count(),
            'rejectedCount' => User::where('status', 'rejected')->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create')->with([
            'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            // 'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
            'status' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            // 'username' => $request->username,
            'email' => $request->email,
            'password' =>  Hash::make($request['password']),
            'role' => $request->role,
            'status' => $request->status,
        ]);
        return redirect(route('user.index'))->with('message', 'User added successfull');
    
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
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('admin.user.create')->with([
            'user' => $user,
            'roles' => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            // 'username' => 'required|unique:users',
            'email' => 'required',
            'password' => 'sometimes',
            'role' => 'sometimes',
            'status' => 'required',
        ]);
        $data = $request->only(['name','email', 'phone', 'role_id', 'status',]);
        $profile = User::find($user);
        if ($request->has('password')) {
            $data['password'] = Hash::make(request()->input('password'));
        }
        $user->update($data);


        return redirect(route('user.index'))->with('message', 'Updated successfull');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'))->with('message', 'User deleted successfull');
    
    }
}
