<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\MemberDataTable;
use App\Models\Member;

class MemberController extends Controller
{
    public function member(MemberDataTable $dataTable)
    {
        $page = 'member';
        return $dataTable->render('member.index', compact('page'));
    }
    
    public function memberCreate(Request $request)
    {
        $page = 'member';
        $member = new Member();
        $member->username = $request->username;
        $member->phone = $request->phone ?? null;
        $member->email = $request->email ?? null;
        $member->save();
        alert()->success('Member created successfully', 'Success');
        return redirect()->route('member');
    }
}
