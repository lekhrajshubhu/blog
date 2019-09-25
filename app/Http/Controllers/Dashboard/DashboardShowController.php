<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class DashboardShowController extends Controller
{

    public function index()
    {
        return view('backend.dashboard.index');

    }
}
