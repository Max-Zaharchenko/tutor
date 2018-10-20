<?php

namespace App\Http\Controllers\Client\Students;

use App\Http\Controllers\Controller;
use App\Models\Invite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class JoinController extends Controller
{
    public function show(Request $request)
    {
        $invite = Invite::where('code', $request->get('token'))->first();

        if (! $invite) {
            return redirect(route('index.index'));
        }

        return view('client.students.join', [
            'invite' => $invite,
        ]);
    }

    public function store(Request $request)
    {
        $invite = Invite::where('code', $request->get('token'))->first();

        if (! $invite) {
            return redirect(route('index.index'));
        }

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        app('db')->transaction(function () use ($request, $invite) {
            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
                'trial_ends_at' => now()->addMonth(),
            ]);

            Auth::login($user);

            $invite->delete();
        });

        return redirect(route('home'));
    }
}
