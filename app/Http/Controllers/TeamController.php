<?php

namespace App\Http\Controllers;

use App\Team;
use App\Profile;
use App\Http\Kernel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;
use Storage;


class TeamController extends Controller
{
    /*
     *
     * @ToDo zmienic nazwe zmiennej
     */
    protected $testId;

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->testId = Auth::user()->id;
            return $next($request);
        });
    }

    public function index(Request $request)
    {
        $teamTest =  new Team();

        $userId = $this->testId;

        $teamId = $teamTest->getTeamId($userId);
        $teamName = $teamTest->getTeamName($userId);


        $rules_team_checkbox = $request->session()->get('rules_team_checkbox');
        $active_team_checkbox = $request->session()->get('active_team_checkbox');

        return view('Team.index',['rules_team_checkbox' => $rules_team_checkbox,
                                        'active_team_checkbox' => $active_team_checkbox,
                                        'team_name'=>$teamName]);
    }

    public function store(Request $request)
    {
        $id = $this->testId;

        $validator = $request->validate([
            'name_team' => 'bail|required|string|max:75',
            'founded_team' => 'required|date',
            'country_team' => 'required|string',
            'rules_team_checkbox' => 'accepted',
            'active_team_checkbox' => 'accepted',
        ]);

        /*
         * set checkbox after refresh page
         */
        if( $request->has('rules_team_checkbox'))
        {
            $request->session()->put('rules_team_checkbox', true);
        }
        else
        {
            $request->session()->put('rules_team_checkbox', false);
        }

        $team = new Team();
        /*
         * przeniesc to do modelu
         *
         */
        $team->profile_id = $id;
        $team->name_team = $request->input('name_team');
        $team->founded_team = $request->input('founded_team');
        $team->country_team = $request->input('country_team');



        $team->active = $request->input('active_team_checkbox');

        $team->save();


        return redirect('team');
    }
}
