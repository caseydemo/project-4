<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $personal_messages = \App\Message::where('recipient_id', '=', \Auth::user()->id)->get();
        return view('/home', compact('personal_messages'));
    }

    

  //     public function write() {
  //     $personal_messages = \App\Message::where('recipient_id', '=', \Auth::user()->id)->get();
        

  //       return view('write', compact('personal_messages'));
  // }
}
