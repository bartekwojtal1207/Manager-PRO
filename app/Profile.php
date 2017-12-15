<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $userId;
    protected $profile;

    public function getProfile()
    {
        $this->profile = DB::table('profiles')
            ->where('user_id', $this->getUserId())
            ->first();
        return $this->profile;
    }

    public function profileName()
    {
        $profile = $this->getProfile();
        return $profile->name_profile;
    }

    /*
     *
     * @ToDo
     * below two function
     * copy to user model
     *
     */
    private function setUserId( )
    {
        $this->userId = Auth::id();
        return $this->userId;
    }

    public function getUserId()
    {
        return $this->setUserId();
    }




    public function team()
    {

        return $this->hasMany(Team::class);
    }

}
