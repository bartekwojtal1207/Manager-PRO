@extends('layouts.app')

@section('title','Profile/edit')

@section('content')

{{--    {{dd($profiles[0]->name_profile)}};--}}
    @foreach ($profiles as $profile)
        {{--{{dd(count($profile))}}--}}
        {{--nie potrzebne foreach bo jeden user zawsze moze miec tylko jedne profil ( w tej chwili !!!) --}}
        <form method="post" action="{{route('profile.update')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <h2 style="color: cadetblue">{{$profile->name_profile}}</h2>
            <label for="name_profile" style="color: aliceblue">Edytuj swoje imię</label>
            <br>
            <input type="text" name="name_profile">

            <h2 style="color: cadetblue">{{$profile->surname_profile}}</h2>
            <label for="surname_profile" style="color: aliceblue">Edytuj swoje nazwisko</label>
            <br>
            <input type="text" name="surname_profile">

            <h2 style="color: cadetblue">{{$profile->tel_profile}}</h2>
            <label for="tel_profile" style="color: aliceblue">{{$profile->tel_profile === null ? 'Wpisz' :'zmień'}} nr telefonu</label>
            <br>
            <input type="text" name="tel_profile">

            <h2 style="color: cadetblue">{{$profile->birthday_profile}}</h2>
            <label for="birthday_profile" style="color: aliceblue">{{$profile->birthday_profile === null ? 'Wpisz' :'zmień'}} datę urodzenia</label>
            <br>
            <input type="text" name="birthday_profile">

            <h2 style="color: cadetblue">{{$profile->country_profile}}</h2>
            <label for="country_profile" style="color: aliceblue">{{$profile->country_profile === null ? 'Wpisz swój kraj': 'zmień swoje pochodzenie'}}</label>
            <br>
            <input type="text" name="country_profile">
            <br/>
            <br/>
            <br/>
            <input type="submit" value="EDYTUJ swoje dane" class="btn btn-danger">
        </form>
    @endforeach

@endsection