<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Center_Point;
use App\Models\Spot;
use Yajra\DataTables\Facades\datatables;

class DataController extends Controller
{
    public function centerpoint(){
        $centerpoint = Center_Point::latest()->get();
        return datatables()->of($centerpoint)
        ->addColumn('action', 'CenterPoint.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }

    public function spot(){
        $spot = Spot::latest()->get();
        return datatables()->of($spot)
        ->addColumn('action', 'Spot.action')
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->toJson();
    }
}


