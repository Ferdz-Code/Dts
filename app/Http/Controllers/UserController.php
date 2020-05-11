<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user ['users']=User::OrderBy('id','asc')->paginate(10);

        return view('user.index',$user);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = array
        (
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password
        );

        User::create($user);

        return redirect()->route('user.index')->with('success','User Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = array
        (
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => $request->password
        );

        User::findOrfail($request->user_id)->update($user);

        return redirect()->route('user.index')->with('success','User Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */

    // public function destroy(Request $user)
    //{
        //$delete = $user->all();

        //$deleteuser = User::findOrfail($user->user_id);
        //$deleteuser->user();
        //return redirect()->route('user.index')->with('success','User Deleted Successfully!');

    public function destroy(Request $id)
    {
        $deleteuser = User::where('id', $id)->delete();

        return redirect()->route('user.index')->with('success','Product deleted Successfully!');
    }
   
    
}

