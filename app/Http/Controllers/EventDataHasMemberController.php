<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventData;
use App\Models\Member;
use App\Models\EventDataHasMember;
use App\DataTables\EventDataHasMemberDataTable;
use Spatie\Permission\Models\Permission;

class EventDataHasMemberController extends Controller
{
    public function eventDetail(EventDataHasMemberDataTable $dataTable, $id)
    {
        $page = 'event';
        $member = Member::all();
        return $dataTable->render('event.detail', compact('page', 'id', 'member'));
    }

    public function eventDetailCreate(Request $request)
    {
        $page = 'event';
        $eventHasMember = new EventDataHasMember();
        $eventHasMember->event_id = $request->event_id;
        $eventHasMember->member_id = $request->member_id;
        $eventHasMember->save();
        alert()->success('Member added to event successfully', 'Success');
        return redirect()->route('event.detail', ['id' => $request->event_id]);
    }
}
