<?php

namespace App\Http\Controllers\Admin\Students;

use App\Http\Controllers\Controller;
use App\Models\User;

class StudentsController extends Controller
{
    public function __construct()
    {
        view()->share('active', 'students');
    }

    public function index()
    {
        $students = User::students()->paginate();

        return view('admin.students.index', [
            'students' => $students,
        ]);
    }
}
