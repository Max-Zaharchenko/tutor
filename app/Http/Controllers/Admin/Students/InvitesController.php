<?php

namespace App\Http\Controllers\Admin\Students;

use App\Interactions\Invites\CreateInviteInteraction;
use App\Mail\Students\Invite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class InvitesController extends Controller
{
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name'  => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:students,email', 'unique:invites,email'],
            'mobile_number' => ['nullable', 'string', 'max:255'],
        ]);

        $invite = $this->interact(CreateInviteInteraction::class, [
            'data' => $data,
        ]);

        Mail::to($invite->email)->send(new Invite($invite));

        return back()
            ->with('success', 'Приглашение успешно отправлено.');
    }
}
