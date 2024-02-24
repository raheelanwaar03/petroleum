<?php

use App\Models\admin\FuelRecored;
use App\Models\admin\Vehicle;
use App\Models\User;

function all_vehicles()
{
    $vehicles = Vehicle::get()->count();
    return $vehicles;
}

function total_users()
{
    $users = User::get()->count();
    return $users;
}

function pending_payment()
{
    $pen_payment = FuelRecored::where('status','Pending')->get();
    $total_payment = 0;
    foreach($pen_payment as $payment)
    {
        $total_payment += $payment->total_price;
    }
    return $total_payment;
}

function clear_payment()
{
    $pen_payment = FuelRecored::where('status','Clear')->get();
    $total_payment = 0;
    foreach($pen_payment as $payment)
    {
        $total_payment += $payment->total_price;
    }
    return $total_payment;
}

function few_payment()
{
    $pen_payment = FuelRecored::where('status','Few Left')->get();
    $total_payment = 0;
    foreach($pen_payment as $payment)
    {
        $total_payment += $payment->total_price;
    }
    return $total_payment;
}

function total_payment()
{
    $pen_payment = FuelRecored::get();
    $total_payment = 0;
    foreach($pen_payment as $payment)
    {
        $total_payment += $payment->total_price;
    }
    return $total_payment;
}
