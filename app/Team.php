<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Team extends Model
{

    protected $idTeam;

    private function setTeamId($idTeam)
    {
        echo $idTeam.'cos'.'tam';
    }

    public function getTeamId($idTeam)
    {
        return $this->setTeamId($idTeam);
    }


    public function seyHello($nameboy)
    {
        echo 'witam was ciuleeeee ! :-) '.$nameboy;
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
