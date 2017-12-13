<?php

namespace App\Http\Controllers;

use App\Team;
use App\Http\Kernel;
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

    public function index(Request $request)
    {

        $data = $request->session()->get('rules_team_checkbox');
//        $data = true;
        $data2 = $request->session()->get('active_team_checkbox');

        return view('Team.index',['rules_team_checkbox' => $data, 'active_team_checkbox' => $data2]);
    }

    public function store(Request $request)
    {
        $id = $this->testId;

        $team = new Team();

        $team->user_id = $id;
        $team->name_team = $request->input('name_team');
        $team->founded_team = $request->input('founded_team');
        $team->country_team = $request->input('country_team');


//        $validatedData = $request->validate([
//            'name_team' => 'bail|required|max:75 ',
//            'founded_team' => 'required|date',
//            'country_team' => 'required|string',
//            'rules_team_checkbox' => 'accepted',
//            'active_team_checkbox' => 'accepted'
//        ]);

        // validator dziala dobrze 
        if( $request->has('rules_team_checkbox'))
        {
            $request->session()->put('rules_team_checkbox', true);
        }
        else
        {
            $request->session()->put('rules_team_checkbox', false);
        }
        // dzialaaaaaa :)

//        dd('przeszlo kurwo jebana ty :)');
//        if( ($request->name_team) !== null && ($request->founded_team) !== null )
//        {
//           dd('uzupelione imie i nazwisk');
//        }
//        else
//        {
//
//            dd('nie jest');
//        }



//        $team->save();
        return redirect('team');
    }
}
