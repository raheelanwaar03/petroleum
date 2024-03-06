<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Broker;
use App\Models\admin\BuyingPetrolRecored as AdminBuyingPetrolRecored;
use Illuminate\Http\Request;

class BuyingPetrolRecored extends Controller
{
    public function index()
    {
        $broker = Broker::where('role', 'Buyer')->get();
        $records = AdminBuyingPetrolRecored::get();
        return view('admin.fuel.buy', compact('records', 'broker'));
    }

    public function store(Request $request)
    {
        $advance =  $request->advance;

        $total_amount = $request->liter * $request->price;
        if ($request->status == 'Advance') {
            $remaning = $total_amount - $advance;
        } else {
            $remaning = 0;
        }

        $record = new AdminBuyingPetrolRecored();
        $record->fuel = $request->fuel;
        $record->liter = $request->liter;
        $record->price = $request->price;
        $record->total_price = $total_amount;
        $record->seller = $request->seller;
        $record->date = $request->date;
        $record->status = $request->status;
        $record->remaning = $remaning;
        $record->advance = $request->advance;
        $record->method = $request->method;
        $record->due_date = $request->due_date;
        $record->note = $request->note;
        $record->save();
        return redirect()->back()->with('success', 'Recored Saved');
    }

    public function edit($id)
    {
        $broker = Broker::where('role', 'Seller')->get();
        $fuel = AdminBuyingPetrolRecored::find($id);
        return view('admin.fuel.buyerEdit', compact('fuel', 'broker'));
    }

    public function update(Request $request, $id)
    {
        $total_amount = $request->liter * $request->price;
        if ($request->status == 'Advance') {
            $advance =  $request->advance;
            $remaning = $total_amount - $advance;
        } elseif ($request->status == 'Clear') {
            $advance = 0;
            $remaning = 0;
        }

        $record = AdminBuyingPetrolRecored::find($id);
        $record->fuel = $request->fuel;
        $record->liter = $request->liter;
        $record->price = $request->price;
        $record->total_price = $request->total_price;
        $record->seller = $request->seller;
        $record->date = $request->date;
        $record->status = $request->status;
        $record->advance = $request->advance;
        $record->remaning = $remaning;
        $record->method = $request->method;
        $record->due_date = $request->due_date;
        $record->note = $request->note;
        $record->save();
        return redirect()->route('Buying.Record')->with('success', 'Updated Successfully');
    }

    public function delete($id)
    {
        $fuel = AdminBuyingPetrolRecored::find($id);
        $fuel->delete();
        return redirect()->back()->with('success', 'Deleted Successsfully!');
    }
}
