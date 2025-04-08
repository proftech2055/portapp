<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Port;

class DashboardController extends Controller
{
    // public function displayView()
    // {
    //     $data1 = Service::all()->count();
    //     $data2 = port::all()->count();
    //     return view('service.dashboard',compact('data1','data2'));
    // }
    public function display()
    {
        $data = Service::all();
        $data1 = Port::all()->count();
        $data2 = Service::all()->count();

        return view('service.dashboard',compact('data','data1','data2'));
    }


}
