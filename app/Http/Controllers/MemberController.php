<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\MemberDataTable;

class MemberController extends Controller
{

    public function member(MemberDataTable $dataTable)
    {
        $page = 'member';
        return $dataTable->render('member.index', compact('page'));
    }
}
