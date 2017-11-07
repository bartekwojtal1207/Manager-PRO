<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $currentProfile = \Auth::user()->profile;
//         udalo sie !!!!!!!!!!
        return view('Profile.index');
    }

    public function save(Request $request)
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentId = \Auth::user()->id;
        $currentProfile = \Auth::user()->profile;// udalo sie !!!!!!!!!!

        $profile = new Profile();
        $profile->name_profile = $request->input('name_profile');
        $profile->surname_profile = $request->input('surname_profile');
        $profile->user_id = $currentId;
//////        $profile->birthday_profile = $request->input('birthday_profile');
//////        $profile->phone_profile = $request->input('phone_profile');
        $profile->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $profiles = DB::table('profiles')->get();
        return view('Profile.edit', ['profiles' => $profiles]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $newProfileName = $_POST['name_profile_edit'];
        $newProfileSurname = $_POST['surname_profile_edit'];

        if(empty($newProfileSurname)) {
            $newProfileSurname =  DB::table('profiles')->value('surname_profile');
        }else if(empty($newProfileName)) {
            $newProfileName =  DB::table('profiles')->value('name_profile');
        }
        $profile_id = DB::table('profiles')->value('user_id');

        $profile_name_update = DB::table('profiles')
            ->where('user_id', $profile_id)
            ->update([
                'name_profile' => $newProfileName,
                'surname_profile'=> $newProfileSurname
                ])
            ->save();

        echo ('wszystko sie udalo, twoje dane zostały podmienione');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
