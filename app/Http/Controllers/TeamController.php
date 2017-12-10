<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Storage;


class TeamController extends Controller
{

    protected $testId;

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->testId = Auth::user()->id;
            return $next($request);
        });
    }

    public function index()
    {
        return view('Team.index');
    }

    public function store(Request $request)
    {
        $id = $this->testId;

        $team = new Team();

        $team->user_id = $id;
        $team->name_team = $request->input('name_team');
        $team->founded_team = $request->input('founded_team');
        $team->country_team = $request->input('country_team');
        $team->active = $request->input('active_team');
        $team->save();

        return redirect('team');
    }
}
