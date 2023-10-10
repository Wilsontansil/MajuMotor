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

    public function eventDetailMember($member_id, $event_id)
    {
        $page = 'event';
        $eventHasMember = EventDataHasMember::where('member_id', $member_id)->where('event_id', $event_id)->first();

        return view('event.detailmember', compact('page', 'eventHasMember', 'member_id', 'event_id'));
    }

    public function eventDetailMemberPost(Request $request)
    {
        $page = 'event';
        $member_id = $request->member_id;
        $event_id = $request->event_id;
        $eventHasMember = EventDataHasMember::where('member_id', $member_id)->where('event_id', $event_id)->first();
        $eventHasMember->status = $request->statusedit;
        $eventHasMember->payment_date = $request->payment_date;
        $eventHasMember->nominal = $request->nominal_pay;
        $eventHasMember->save();
        alert()->success('Member status updated successfully', 'Success');
        return redirect()->route('event.detail', ['id' => $event_id]);
    }


}
