<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function add()
    {
        return view('admin.Expense.addCategory');
    }

    public function store(Request $request)
    {
        return $request;
    }


}
