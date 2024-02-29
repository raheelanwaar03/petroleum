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
        $expense->type = $request->expense;
        $expense->save();
        return redirect()->back()->with('success','Added');
    }


}
