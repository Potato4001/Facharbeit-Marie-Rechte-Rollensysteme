<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeamUserController extends Controller
{
    public function create()
    {
        return view('team.user');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', Rule::unique('user', 'name')],
            'email' => ['required', Rule::unique('user', 'email')]
        ]);

        User::create($attributes);

        return redirect('team/{user->team_id}');
    }
}