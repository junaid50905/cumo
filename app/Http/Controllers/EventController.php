<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        // $events = Event::all();
        // return view('events.index', compact('events'));
        return view('eventCalendar.index');
    }

    public function create()
    {
        return view('eventCalendar.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        Event::create($validatedData);

        return redirect()->route('eventCalendar.index')
            ->with('success', 'Event created successfully.');
    }

    public function show(Event $event)
    {
        return view('eventCalendar.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('eventCalendar.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'date' => 'required|date',
        ]);

        $event->update($validatedData);

        return redirect()->route('eventCalendar.index')
            ->with('success', 'Event updated successfully.');
    }

    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('eventCalendar.index')
            ->with('success', 'Event deleted successfully.');
    }
}