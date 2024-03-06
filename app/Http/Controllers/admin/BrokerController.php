<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Broker;
use App\Models\admin\BuyingPetrolRecored;
use App\Models\admin\FuelRecored;
use Illuminate\Http\Request;

class BrokerController extends Controller
{

    public function index()
    {
        $broker = Broker::get();
        return view('admin.broker.index', compact('broker'));
    }

    public function edit($id)
    {
        $broker = Broker::find($id);
        return view('admin.broker.edit', compact('broker'));
    }

    public function add()
    {
        return view('admin.broker.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:' . Broker::class],
            'role' => 'required',
        ]);

        $broker = new Broker();
        $broker->name = $request->name;
        $broker->role = $request->role;
        $broker->note = $request->note;
        $broker->save();
        return redirect()->route('All.Broker')->with('success', 'Broker added successfully');
    }

    public function update(Request $request, $id)
    {
        $broker = Broker::find($id);
        $broker->name = $request->name;
        $broker->role = $request->role;
        $broker->note = $request->note;
        $broker->save();
        return redirect()->route('All.Broker')->with('success', 'Updated Successfully');
    }

    public function delete($id)
    {
        $broker = Broker::find($id);
        $broker->delete();
        return redirect()->route('All.Broker')->with('success', 'Deleted Successfully');
    }

    public function recored($name)
    {
        $check = Broker::where('name', $name)->first();
        if ($check->role == 'Seller') {
            $recored = FuelRecored::where('buyer', $name)->get();
        } elseif ($check->role == 'Buyer') {
            $recored = BuyingPetrolRecored::where('seller', $name)->get();
        }
        $creadit = 0;
        $total_advance = 0;
        $pre_amount = 0;
        $debit = 0;
        foreach ($recored as $item) {
            if($item->status == 'Advance')
            {
                $debit += $item->remaning;
                $pre_amount += $item->advance;
            }
            if($item->status == 'Clear')
            {
                $creadit += $item->total_price;
                $total_advance = $creadit + $pre_amount;
            }
        }
        $role = $check->role;
        return view('admin.broker.recored', compact('recored','name','role','total_advance','debit'));
    }
}
