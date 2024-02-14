<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Vehicle;
use Illuminate\Http\Request;

class VehicalesController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::get();
        return view('admin.vehicales.index',compact('vehicles'));
    }

    public function store(Request $request)
    {
        $vehicle = new Vehicle();
        $vehicle->name = $request->name;
        $vehicle->number = $request->number;
        $vehicle->model = $request->model;
        $vehicle->province = $request->province;
        $vehicle->save();
        return redirect()->back()->with('success', 'Vehicle added successfully');
    }
}
