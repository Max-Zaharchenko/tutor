<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;

class DashboardController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'dashboard');
    }

    public function index()
    {
        $studentCount = Student::count();

        return view('admin.dashboard.index', [
            'studentsCount' => $studentCount,
        ]);
    }
}
