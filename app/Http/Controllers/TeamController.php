<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    public function create()
    {
        return view('team.create');
    }

    public function store()
    {
        // validate request
        $attributes = request()->validate([
            'team name' => ['required', Rule::unique('team', 'team name')],
            'sport type' => ['required'],
            'team type' => ['required']
        ]);

        Team::create($attributes);

        return redirect('team/step-user');
    }
}
