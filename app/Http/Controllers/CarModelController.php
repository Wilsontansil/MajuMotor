<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\CarModelDataTable;
use App\Models\CarModel;

class CarModelController extends Controller
{

    public function car(CarModelDataTable $dataTable)
    {
        $page = 'car';
        return $dataTable->render('cars.index', compact('page'));
    }

    public function carCreate(Request $request)
    {
        $page = 'car';
        try {
            $car = new CarModel();
            $car->code = $request->carcode;
            $car->name = $request->carname;
            $car->brand = $request->carbrand;
            $car->type = $request->cartype;
            $car->save();
        } catch (\Exception $e) {
            alert()->error($e->getMessage(), 'Error');
            return redirect()->route('car');
        }

        alert()->success('Car created successfully', 'Success');
        return redirect()->route('car');
    }
}
