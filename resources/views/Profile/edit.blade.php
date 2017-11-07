@extends('layouts.app')

@section('title','Profile/edit')

@section('content')

    @foreach ($profiles as $profile)
        <h2 style="color: cadetblue">{{$profile->name_profile}}</h2>
        <form method="post" action="{{route('profile.update')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <label for="name_profile_edit" style="color: aliceblue">Edytuj swoje imię</label>
            <br>
            <input type="text" name="name_profile_edit">
            <input type="submit" value="EDYTUJ imię" class="btn btn-danger">
        {{--</form>--}}
        <h2 style="color: cadetblue">{{$profile->surname_profile}}</h2>
        {{--<form method="post" action="{{route('profile.update')}}">--}}
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <label for="surname_profile_edit" style="color: aliceblue">Edytuj swoje nazwisko</label>
            <br>
            <input type="text" name="surname_profile_edit">
            <input type="submit" value="EDYTUJ nazwisko" class="btn btn-danger">
        </form>
    @endforeach

@endsection