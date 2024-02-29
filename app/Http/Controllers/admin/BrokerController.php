<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Broker;
use Illuminate\Http\Request;

class BrokerController extends Controller
{

    public function index()
    {
        $broker = Broker::get();
        return view('admin.broker.index', compact('broker'));
    }


    public function add()
    {
        return view('admin.broker.add');
    }

    public function store(Request $request)
    {
        $broker = new Broker();
        $broker->name = $request->name;
        $broker->amount = $request->amount;
        $broker->note = $request->note;
        $broker->save();
        return redirect()->back()->with('success', 'Broker added successfully');
    }
}