<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use Symfony\Component\Mime\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('messages.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $message)
    {
        $message=new Message();
        $message['name']=$request->input('name');
        $message['nationality']=$request->input('nationality');
        $message['born']=$request->input('born');
        return view('message.store',compact('message'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('message.show',compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('message.edit',compact('message'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
