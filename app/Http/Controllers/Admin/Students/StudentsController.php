<?php

namespace App\Http\Controllers\Admin\Students;

use App\Http\Controllers\Controller;
use App\Interactions\Invites\CreateInviteInteraction;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'email' => ['required', 'email', 'unique:students,email', 'unique:invites,email'],
        ]);

        $this->interact(CreateInviteInteraction::class, [
            'data' => $data,
        ]);

        return back()
            ->with('success', 'Приглашение успешно отправлено.');
    }
}
