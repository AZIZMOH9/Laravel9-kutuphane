<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user.index');
    }
    public function reviews(){

        $comments=Comment::where('user_id','=',Auth::id())->get();
        return view('home.user.comments',[
            'comments'=>$comments,]);

    }
    public function borrows(){

        $borrows=Borrow::where('user_id','=',Auth::id())->get();
        return view('home.user.borrow',[
            'borrows'=>$borrows,]);

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
        //
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
    public function borrow(){

        $borrow=Borrow::where('user_id','=',Auth::id())->get();
        return view('home.user.appointments',[
            'borrow'=>$borrow,]);

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
    public function update(Request $request, $id)
    {
        //
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
    public function borrowdestroy($id)
    {
        //

        $data= Borrow::find($id);
        $data->delete();
        return redirect(route('userpanel.borrow'));
    }
}
