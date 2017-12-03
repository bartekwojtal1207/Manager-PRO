<?php

namespace App\Http\Controllers;

use App\Profile;
use App\Providers\AppServiceProvider;
use App\User;
use App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Cache\Factory;
use Illuminate\Contracts\Cache\Repository;
//use App\Http\Controllers\File;
use Illuminate\Http\File;


class ProfileController extends Controller
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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $id = $this->testId;

        $profiles = DB::table('profiles')
            ->where('user_id', $id)
            ->get();

        return view('Profile.index', ['profiles' => $profiles]);
    }

    public function save()
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
        $id = $this->testId;

        $profile = new Profile();

        $profile->name_profile = $request->input('name_profile');
        $profile->surname_profile = $request->input('surname_profile');
        $profile->user_id = $id;
        $profile->birthday_profile = $request->input('birthday_profile');
        $profile->tel_profile = $request->input('phone_profile');
        $profile->country_profile = $request->input('country_profile');
        $profile->save();

        $file = $request->file('image');
        if (! empty($file))
        {
            Storage::putFileAs('public/images/images_profile', new File($file), $this->testId.'avatar');
        }

        return redirect('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id = $this->testId;
        $profiles = DB::table('profiles')
            ->where('user_id', $id)
            ->get();

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
        $id = $this->testId;
        $profile_id = DB::table('profiles')->value('user_id');
        $allValueEditProfile = $request->except('_token','edit_avatar' );

        foreach ($allValueEditProfile as $key => $value) {
            $value === NULL ? $value = DB::table('profiles')->where('user_id', $id)->value($key): $value;

            $profile_name_update = DB::table('profiles')
                ->where('user_id', $profile_id)
                ->update([$key => $value]);
        }

        $file = $request->file('edit_avatar');

        if (! empty($file))
        {
            Storage::putFileAs('public/images/images_profile', new File($file), $this->testId.'avatar');
        }

        return redirect('profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $id = $this->testId;

        $profiles = DB::table('profiles')
            ->where('user_id', $id)
            ->whereNotNull('updated_at')
            ->delete();

        $exists = Storage::disk('local')->exists('public/images/images_profile/'.$this->testId.'avatar');

        if ($exists)
        {
            Storage::delete('public/images/images_profile/'.$this->testId.'avatar');
        }

        return redirect('profile');
    }
}
