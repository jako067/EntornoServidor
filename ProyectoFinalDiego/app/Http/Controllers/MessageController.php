<?php

namespace App\Http\Controllers;

use App\Http\Requests\MessageRequest;
use App\Models\Message;
use Illuminate\Http\Request;
use PharIo\Manifest\Author;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        $messages = Message::get();
        return view("messages.index", compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    if(!Auth::user()){

        return view('auth.login');
    }
        $messages = Message::get();
        return (view('messages.create', compact("messages")));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(MessageRequest $request)
    {
        $message = new Message();
        $message['name'] = $request->input('name');
        $message['subject'] = $request->input('subject');
        $message['text'] = $request->input('text');
        $message['readed'] = $request->input('readed') ? 1 : 0;

        $message->user()->associate(Auth::user());

        $message->save();

        return (redirect()->route('messages.show', $message));
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        if ($message->user_id !== Auth::id() && !$message->readed) {
            $message->readed = 1;
            $message->save();
        }

        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MessageRequest $request, Message $message)
    {
        $message['name'] = $request->input('name');
        $message['subject'] = $request->input('subject');
        $message['text'] = $request->input('text');
        $message['readed'] = $request->input('readed') ? 1 : 0;



        $message->save();

        return (redirect()->route('messages.show', $message));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index');
    }
}
