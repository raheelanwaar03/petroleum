<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\BuyingPetrolRecored as AdminBuyingPetrolRecored;
use Illuminate\Http\Request;

class BuyingPetrolRecored extends Controller
{
    public function index()
    {
        $records = AdminBuyingPetrolRecored::get();
        return view('admin.fuel.buy',compact('records'));
    }

    public function store(Request $request)
    {
        $record = new AdminBuyingPetrolRecored();
        $record->liter = $request->liter;
        $record->price = $request->price;
        $record->total_price = $request->total_price;
        $record->seller = $request->seller;
        $record->date = $request->date;
        $record->status = $request->status;
        $record->save();
        return redirect()->back()->with('success', 'Recored Saved');
    }

    public function edit($id)
    {
        $fuel = AdminBuyingPetrolRecored::find($id);
        return view('admin.fuel.buyerEdit', compact('fuel'));
    }

    public function update(Request $request, $id)
    {
        $fuel = AdminBuyingPetrolRecored::find($id);
        $fuel->liter = $request->liter;
        $fuel->price = $request->price;
        $fuel->total_price = $request->total_price;
        $fuel->seller = $request->seller;
        $fuel->date = $request->date;
        $fuel->status = $request->status;
        $fuel->save();
        return redirect()->route('Buying.Record')->with('success', 'Updated Successfully');
    }

    public function delete($id)
    {
        $fuel = AdminBuyingPetrolRecored::find($id);
        $fuel->delete();
        return redirect()->back()->with('success','Deleted Successsfully!');
    }


}
