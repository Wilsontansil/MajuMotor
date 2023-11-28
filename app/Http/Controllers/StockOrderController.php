<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\StockOrderDataTable;
use App\Models\StockOrder;

class StockOrderController extends Controller
{
    public function stockorder(StockOrderDataTable $dataTable)
    {
        $page = 'stockorder';
        return $dataTable->render('stockorder.index', compact('page'));
    }

    public function stockorderCreate(Request $request)
    {
        $page = 'stockorder';
        $stockorder = new StockOrder();
        $stockorder->code = $request->stockordercode;
        $stockorder->name = $request->stockordername;
        $stockorder->address = $request->stockorderaddress;
        $stockorder->phone = $request->stockorderphone;
        $stockorder->email = $request->stockorderemail;
        $stockorder->bank = $request->stockorderbank;
        $stockorder->bank_name = $request->stockorderaccountname;
        $stockorder->bank_account = $request->stockorderaccount;
        $stockorder->save();

        alert()->success('StockOrder created successfully', 'Success');
        return redirect()->route('stockorder');
    }
}
