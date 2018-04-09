<?php

namespace App\Http\Controllers;

use App\Profile;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;


class ProfileController extends Controller
{
    protected $userId;

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->userId = Auth::user()->id;
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
        try {
            $profile = new Profile();
            $profile->getProfile();
            return view('Profile.index', ['profile' => $profile->getProfile()]);
        }catch(\Exception $e) {
            return view('home');
        }

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


        $id = $this->userId;
        $profile = new Profile();
        $profile->getProfile();

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
        $profile = new Profile();
        $profile = $profile->getProfile();

        return view('Profile.edit', ['profile' => $profile]);
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
        $profile = new Profile();
        $profileId = $profile->getProfileId();

        $allValueEditProfile = $request->except('_token','edit_avatar' );

        foreach ($allValueEditProfile as $key => $value) {
            $value === NULL ? $value = $profile->value($key): $value;
        /// ustawienie value do update -> gdy jest 0 to pobieramy wartosc z bazy -> gdy ==! 0 value == wartosc z request (input)
            $profile->where('user_id', $profileId)
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
        $userId = $this->userId;

        $profile = new Profile();
        $profile->whereNotNull('updated_at')
                ->delete();

        $exists = Storage::disk('local')->exists('public/images/images_profile/'.$userId.'avatar');

        if ($exists)
        {
            Storage::delete('public/images/images_profile/'.$userId.'avatar');
        }

        return redirect('profile');
    }
}
