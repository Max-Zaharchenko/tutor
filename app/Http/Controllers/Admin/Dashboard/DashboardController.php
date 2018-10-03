<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'dashboard');
    }

    public function index()
    {
        return view('admin.dashboard.index');
    }
}
