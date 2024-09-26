<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\Validator;
use App\Rules\CustomValidation;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(4);
                return view('home',compact('users'));
            // return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'useremail' => 'required | email',
            'userage'   => 'required | numeric',
            'usercity'  => 'required',
        ]);
        // return $request;
        // $user = new User;
        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->age = $request->userage;
        // $user->city = $request->usercity;

        // $user->save();

        User::create([
            'name' => $request->username,
            'email'=> $request->useremail,
            'age'  => $request->userage,
            'city' => $request->usercity,

        ]);

        return redirect()->route('user.index')->with('status','Data Added succesfully..!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User:: findOrFail($id) ;
        return view('singleUser',compact('users'));
        // return "";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $users = User::findOrFail($user->id);
        return view('updateUser',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'username'  => 'required',
            'useremail' => 'required | email',
            'userage'   => 'required | numeric',
            'usercity'  => 'required',
        ]);
        // $users = User::find($user->id);

        // $users->name = $request->username;
        // $users->email = $request->useremail;
        // $users->age = $request->userage;
        // $users->city = $request->usercity;

        // $users->save();
        
        // $request->validate([
        //     'name' => 'required',
        //     'email'=> 'required | email',
        //     'age'  => 'required | numeric',
        //     'city' => 'required',
        // ]);

        $users = User::where('id', $user->id)
                    ->update([
                    'name' => $request->username,
                    'email'=> $request->useremail,
                    'age'  => $request->userage,
                    'city' => $request->usercity,
                ]);

        return redirect()->route('user.index')->with('status','Data Updated Succefully..!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::findOrFail($user->id);
        $user->delete();

        // User::destroy($user->id);
        return redirect()->route('user.index')->with('status','Data Deleted Succefully..!');
    }
}
