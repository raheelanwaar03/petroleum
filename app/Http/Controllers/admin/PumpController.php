<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Pump;
use Illuminate\Http\Request;

class PumpController extends Controller
{
    public function index()
    {
        $pumps = Pump::get();
        return view('admin.pump.index', compact('pumps'));
    }

    public function store(Request $request)
    {
        $pump = new Pump();
        $pump->name = $request->name;
        $pump->owner = $request->owner;
        $pump->location = $request->location;
        $pump->save();
        return redirect()->back()->with('success', 'Pump Added Successfully');
    }

    public function edit($id)
    {
        $pump = Pump::find($id);
        return view('admin.pump.edit', compact('pump'));
    }

    public function update(Request $request, $id)
    {
        $pump = Pump::find($id);
        $pump->name = $request->name;
        $pump->owner = $request->owner;
        $pump->location = $request->location;
        $pump->save();
        return redirect()->route('All.Pumps')->with('success', 'Updated successfully!');
    }

    public function delete($id)
    {
        $pump = Pump::find($id);
        $pump->delete();
        return redirect()->back()->with('success', 'Pump Removed');
    }
}
