<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\StockOrderDataTable;
use App\Models\StockOrder;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;

class StockOrderController extends Controller
{
    public function stockorder(StockOrderDataTable $dataTable)
    {
        $page = 'stockorder';
        $suppliers = Supplier::all();
        return $dataTable->render('stockorder.index', compact('page', 'suppliers'));
    }

    public function stockorderCreate(Request $request)
    {
        $auth = Auth::user();
        $page = 'stockorder';
        $stockorder = new StockOrder();
        $stockorder->name = $request->stockordername;
        $stockorder->operator = $auth->name;
        $stockorder->supplier = $request->stockordersupplier;
        $stockorder->store = $auth->MM_Store_Code;
        $stockorder->save();

        alert()->success('StockOrder created successfully', 'Success');
        return redirect()->route('stockorder');
    }

    public function stockorderEdit($id)
    {
        $page = 'stockorder';
        $stockorder = StockOrder::find($id);
        return view('stockorder.edit', compact('page', 'stockorder', 'suppliers'));
    }
}
