<?php

namespace App\Http\Controllers\Client\Students;

use App\Http\Controllers\Controller;
use App\Models\Invite;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function show(Request $request)
    {
        $invite = Invite::where('code', $request->get('code'))->first();

        if (! $invite) {
            return redirect(route('index.index'));
        }

        return view('client.students.join', [
            'invite' => $invite,
        ]);
    }
}
