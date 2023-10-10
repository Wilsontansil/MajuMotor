<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\EventDataDataTable;
use App\Models\EventData;

class EventDataController extends Controller
{
    public function event(EventDataDataTable $dataTable)
    {
        $page = 'event';
        return $dataTable->render('event.index', compact('page'));
    }

    public function eventCreate(Request $request)
    {
        $page = 'event';
        $event = new EventData();
        $event->event_name = $request->event_name;
        $event->event_location = $request->event_location ?? null;
        $event->event_date = $request->event_date ?? null;
        $event->event_time_start = $request->event_time_start ?? null;
        $event->event_time_end = $request->event_time_end ?? null;
        $event->event_description = $request->event_description ?? null;
        $event->event_nominal = $request->event_nominal ?? null;
        $event->save();
        alert()->success('Event created successfully', 'Success');
        return redirect()->route('event');
    }
}
