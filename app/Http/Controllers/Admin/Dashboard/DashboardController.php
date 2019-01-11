<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\CallSession;
use App\Models\Student;
use App\Models\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'dashboard');
    }

    public function index()
    {
        $studentCount = User::students()->count();

        $nearestCall = CallSession::query()
            ->whereDate('start_at', '>=', now())
            ->whereNotNull('user_id')
            ->orderBy('start_at', 'ASC')
            ->first();

        return view('admin.dashboard.index', [
            'studentsCount' => $studentCount,
            'nearestCall'   => $nearestCall,
        ]);
    }
}
