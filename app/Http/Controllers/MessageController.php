<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function read($id) {
        $message = \App\Message::find($id);


        return view('message', compact('message'));
  }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return View('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $newMessage = new \App\Message;
    $newMessage->sender_id=\Auth::user()->id;
    $newMessage->recipient_id=$request->recipient_id;
    $newMessage->subject=$request->subject; // TODO
    $newMessage->body=$request->message;
    $newMessage->is_read= true;
    $newMessage->is_starred=false;


    $sender_id = $newMessage->sender_id;
    $recipient_id = $newMessage->recipient_id;
    $subject = $newMessage->subject;
    $body = $newMessage->body;
    $is_read=$newMessage->is_read= true;
    $is_starred=$newMessage->is_starred;
    $newMessage->save();

    // return ($request);
    
    // return view('trash', compact('body', 'sender_id', 'recipient_id', 'subject'));
    
    return redirect('/home');    
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
}
