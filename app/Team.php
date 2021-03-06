<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Team extends Model
{
    protected $team;
    protected $idTeam;// pobrac wartosc id z tabeli team gdzie user_id jest rowny profile id
    protected $nameTeam;

    public function getTeams($userId)
    {

        $this->team = DB::table('teams')
            ->where('profile_id', $userId)
            ->join('profiles', 'teams.profile_id','profiles.id')
            ->orderBy('country_team', 'asc')
            ->get();

        return $this->team;
    }

    public function getTeamId($userId)
    {
        $this->idTeam = DB::table('teams')
            ->where('profile_id','=',$userId)
            ->pluck('id');

        $data = [];
        foreach ($this->idTeam as $id_team) {
            array_push($data, $id_team);
        }
        return $data;
    }

    public function getTeamName($idUser)
    {

        $this->nameTeam = DB::table('teams')
            ->where('profile_id','=',$idUser)
            ->pluck('name_team'); // pobieranie kilku wartosci np jezeli jeden user ma kilka postows
        $data = [];

        foreach ($this->nameTeam as $name_team) {
//            echo $name_team;
            array_push($data, $name_team);
        }
//        dd($this->nameTeam);
//        {{--wyswietla wszystkie nazwy teamow dla wybranego uzytkowniak--}}

//        dd($data);
        return $data; // zwraca tablice
//        return $this->nameTeam ;

    }


    public function setActive()
    {
        $users = DB::table('teams')
            ->join('profiles', 'teams.id', '=', 'profiles.user_id')
            ->pluck('name_profile');
//            ->get();
//         dd($users);
//        foreach ($users as $user) {
//            echo $user;
//        }

    // dziala metoda laczenia
    }



    /*
     *
     *
     *
     * budowanie modelu chyba juz wiaadokmo o co chodzi
     * zbudowanc dalej
     * do kazdej kolumny z bazy
     *
     *
     */




}
