<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Broker;
use App\Models\admin\FuelRecored;
use Illuminate\Http\Request;

class FuelRecoredController extends Controller
{
    public function index()
    {
        $broker = Broker::where('role', 'Seller')->get();
        $records = FuelRecored::get();
        return view('admin.fuel.index', compact('records', 'broker'));
    }

    public function store_selling(Request $request)
    {
        $total_cost = $request->liter * $request->price;

        $record = new FuelRecored();
        $record->fuel = $request->fuel;
        $record->liter = $request->liter;
        $record->price = $request->price;
        $record->total_price = $total_cost;
        $record->status = $request->status;
        $record->buyer = $request->buyer;
        $record->date = $request->date;
        $record->method = $request->method;
        $record->due_date = $request->due_date;
        $record->note = $request->note;
        $record->save();
        return redirect()->back()->with('success', 'Recored Saved');
    }

    public function edit($id)
    {
        $broker = Broker::where('role', 'Buyer')->get();
        $fuel = FuelRecored::find($id);
        return view('admin.fuel.edit', compact('broker','fuel'));
    }

    public function update(Request $request, $id)
    {
        $record = FuelRecored::find($id);
        $record->fuel = $request->fuel;
        $record->liter = $request->liter;
        $record->price = $request->price;
        $record->total_price = $request->price;
        $record->status = $request->status;
        $record->buyer = $request->buyer;
        $record->date = $request->date;
        $record->method = $request->method;
        $record->due_date = $request->due_date;
        $record->note = $request->note;
        $record->save();
        return redirect()->route('All.Recored')->with('success', 'Updated Successfully');
    }

    public function delete($id)
    {
        $fuel = FuelRecored::find($id);
        $fuel->delete();
        return redirect()->back()->with('success', 'Deleted Successsfully!');
    }
}
