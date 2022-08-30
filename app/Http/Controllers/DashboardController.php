<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admindashboard(){

        return view('dashboard.admin');
    }
    public function customerdashboard(){
        return view('dashboard.customer');
    }
}
