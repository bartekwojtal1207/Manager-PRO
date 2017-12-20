<?php

namespace App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Team extends Model
{

    protected $idTeam;// pobrac wartosc id z tabeli team gdzie user_id jest rowny profile id
    protected  $nameTeam;

    private function setTeamId($idTeam)
    {

    }

    public function getTeamId($userId)
    {

        $this->idTeam = DB::table('teams')
            ->where('profile_id','=',$userId)
            ->value('id');

        return $this->idTeam ;

    }

    public function getTeamName($idUser)
    {

        $this->nameTeam = DB::table('teams')
            ->where('profile_id','=',$idUser)
            ->pluck('name_team'); // pobieranie kilku wartosci np jezeli jeden user ma kilka postows

        foreach ($this->nameTeam as $name_team) {
            echo $name_team;
        }
//        return $this->nameTeam ;

    }


    private function setActive($idTeam)
    {
        echo 'ten zespol jest aktynwy';
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
