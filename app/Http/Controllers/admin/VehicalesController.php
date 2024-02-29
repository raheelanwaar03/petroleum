<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Pump;
use App\Models\admin\Vehicle;
use Illuminate\Http\Request;

class VehicalesController extends Controller
{
    public function index()
    {
        $pump = Pump::get();
        $vehicles = Vehicle::get();
        return view('admin.vehicales.index',compact('vehicles','pump'));
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

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('admin.vehicales.edit',compact('vehicle'));
    }

    public function update(Request $request,$id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->name = $request->name;
        $vehicle->number = $request->number;
        $vehicle->model = $request->model;
        $vehicle->province = $request->province;
        $vehicle->save();
        return redirect()->back()->with('success','Vehile detials updated');

    }

    public function delete($id)
    {
        $vehicle = Vehicle::find($id);
        $vehicle->delete();
        return redirect()->back()->with('success','Vehicle Deleted');
    }


}
