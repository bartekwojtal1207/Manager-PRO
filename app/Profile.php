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
            ->join('users','profiles.user_id', 'users.id')
            ->first();

        function integerToRoman($integer)
        {
            // Convert the integer into an integer (just to make sure)
            $integer = intval($integer);
            $result = '';

            // Create a lookup array that contains all of the Roman numerals.
            $lookup = array('M' => 1000,
                'CM' => 900,
                'D' => 500,
                'CD' => 400,
                'C' => 100,
                'XC' => 90,
                'L' => 50,
                'XL' => 40,
                'X' => 10,
                'IX' => 9,
                'V' => 5,
                'IV' => 4,
                'I' => 1);

            foreach($lookup as $roman => $value){
                // Determine the number of matches
                $matches = intval($integer/$value);

                // Add the same number of characters to the string
                $result .= str_repeat($roman,$matches);

                // Set the integer to be the remainder of the integer and the value
                $integer = $integer % $value;
            }

            // The Roman numeral should be built, return it
            dd($result);
            return $result;
        }
        integerToRoman(7);
        return $this->profile;
    }

    public function getProfileId()
    {
        $profile = $this->getProfile();

        return $profile->id;
    }


    public function getProfileName()
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
