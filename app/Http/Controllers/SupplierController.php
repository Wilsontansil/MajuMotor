<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\SupplierDataTable;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function supplier(SupplierDataTable $dataTable)
    {
        $page = 'supplier';
        return $dataTable->render('supplier.index', compact('page'));
    }

    public function supplierCreate(Request $request)
    {
        $page = 'supplier';
        $supplier = new Supplier();
        $supplier->code = $request->suppliercode;
        $supplier->name = $request->suppliername;
        $supplier->address = $request->supplieraddress;
        $supplier->phone = $request->supplierphone;
        $supplier->email = $request->supplieremail;
        $supplier->bank = $request->supplierbank;
        $supplier->bank_name = $request->supplieraccountname;
        $supplier->bank_account = $request->supplieraccount;
        $supplier->save();

        alert()->success('Supplier created successfully', 'Success');
        return redirect()->route('supplier');
    }

    public function supplierEdit($id)
    {
        $page = 'supplier';
        $supplier = Supplier::find($id);
        return view('supplier.edit', compact('page', 'supplier'));
    }

    public function supplierSave(Request $request)
    {
        $page = 'supplier';
        // dd($request->suppliercode);
        $supplier = Supplier::find($request->supplierid);
        $supplier->code = $request->suppliercode;
        $supplier->name = $request->suppliername;
        $supplier->address = $request->supplieraddress;
        $supplier->phone = $request->supplierphone;
        $supplier->email = $request->supplieremail;
        $supplier->bank = $request->supplierbank;
        $supplier->bank_name = $request->supplieraccountname;
        $supplier->bank_account = $request->supplieraccount;
        $supplier->save();

        alert()->success('Supplier updated successfully', 'Success');
        return redirect()->route('supplier');
    }
}
