<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function add()
    {
        return view('admin.Expense.addCategory');
    }

    public function store(Request $request)
    {
        $expense = new Expense();
        $expense->type = $request->type;
        $expense->amount = $request->amount;
        $expense->save();
        return redirect()->back()->with('success','Added');
    }

    public function index()
    {
        $expenses = Expense::get();
        return view('admin.Expense.index',compact('expenses'));
    }


}
