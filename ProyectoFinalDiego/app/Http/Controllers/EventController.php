<?php

namespace App\Http\Controllers;

use App\Models\Event;
use DeepCopy\Filter\ReplaceFilter;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        $events = Event::orderBy('date')->get();
        return (view('events.index', compact('events')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::get();
        return (view('events.create', compact("events")));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Event;

        $event['name'] = $request->input('name');
        $event['description'] = $request->input('description');
        $event['location'] = $request->input('location');
        $event['map'] = $request->input('map');
        $event['date'] = $request->input('date');
        $event['hour'] = $request->input('hour');
        $event['type'] = $request->input('type');
        $event['tag'] = $request->input('tag');
        $event['visible'] = $request->input('visible') ? 1 : 0;

        $event->save();

        return redirect()->route("events.show", $event);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $event['name'] = $request->input('name');
        $event['description'] = $request->input('description');
        $event['location'] = $request->input('location');
        $event['map'] = $request->input('map');
        $event['date'] = $request->input('date');
        $event['hour'] = $request->input('hour');
        $event['type'] = $request->input('type');
        $event['tag'] = $request->input('tag');
        $event['visible'] = $request->input('visible') ? 1 : 0;

        $event->save();

        return (redirect()->route('events.show', $event));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('events.index');
    }

    public function likeDislike(Event $event)
    {

        $event->users()->toggle(Auth::user()); //funciona

        return redirect()->back();

        //dd(url()->previous());

        // if($page === 'index') {
        //     return redirect()->route('events.index');
        // } else {
        //     return redirect()->route('events.show', $event);
        // }
    }
}
