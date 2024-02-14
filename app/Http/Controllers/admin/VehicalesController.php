<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VehicalesController extends Controller
{
    public function add()
    {
        return view('admin.vehicales.add');
    }
}
