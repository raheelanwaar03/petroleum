<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Salary;
use Illuminate\Http\Request;

class SalaryMangementController extends Controller
{
    public function add()
    {
        return view('admin.salary.add');
    }

    public function details()
    {
        $salary = Salary::get();
        return view('admin.salary.index',compact('salary'));
    }

    public function store(Request $request)
    {
        $salary = new Salary();
        $salary->name = $request->name;
        $salary->salary = $request->salary;
        $salary->status = $request->status;
        $salary->date = $request->date;
        $salary->save();
        return redirect()->back()->with('success','Recored Added');
    }


}
