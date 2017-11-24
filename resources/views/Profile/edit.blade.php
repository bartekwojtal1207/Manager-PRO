@extends('layouts.app')

@section('title','Profile/edit')

@section('content')
    <div class="row" style="margin-bottom: 15px;">
        <h3> Edytuj swoje dane :</h3>
    </div>
{{--    {{dd($profiles[0]->name_profile)}};--}}
    @foreach ($profiles as $profile)
        {{--{{dd(count($profile))}}--}}
        {{--nie potrzebne foreach bo jeden user zawsze moze miec tylko jedne profil ( w tej chwili !!!) --}}
        <form method="post" action="{{route('profile.update')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <div class="row">
                <div class="col-md-2" style="display: flex; justify-content: center">
                    <p style="color: gray; line-height: 34px; font-size: 14px;">Imię</p>
                </div>
                <div class="col-md-2" >
                    <input type="text" class="form-control" name="name_profile" placeholder="{{$profile->name_profile === null ? ' wpisz swoje imię' : $profile->name_profile}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2" style="display: flex; justify-content: center">
                    <p style="color: gray; line-height: 34px; font-size: 14px;">Nazwisko</p>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control" name="name_profile" placeholder="{{$profile->surname_profile === null ? ' wpisz swoje nazwisko' : $profile->surname_profile}}">
                </div>
            </div>

            <div class="row" >
                <div class="col-md-2" style="display: flex; justify-content: center">
                    <p style="color: gray; line-height: 34px; font-size: 14px;">Numer telefonu</p>
                </div>
                <div class="col-md-2">
                    <input type="text"  class="form-control"  name="name_profile" placeholder="{{$profile->tel_profile === null ? ' wpisz swój numer telefonu' : $profile->tel_profile}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2" style="display: flex; justify-content: center">
                    <p style="color: gray; line-height: 34px; font-size: 14px;">Data urodzenia</p>
                </div>
                <div class="col-md-2">
                    <input type="text"  class="form-control" name="name_profile" placeholder="{{$profile->birthday_profile === null ? ' wpisz' :' edytuj'}} datę urodzenia">
                </div>
            </div>

            <div class="row">
                <div class="col-md-2" style="display: flex; justify-content: center">
                    <p style="color: gray; line-height: 34px; font-size: 14px;">Twój kraj</p>
                </div>
                <div class="col-md-2">
                    <input type="text"  class="form-control" name="name_profile" placeholder="{{$profile->country_profile === null ? ' wpisz' :' edytuj'}} datę urodzenia">
                </div>
            </div>

            <div class="row" style="margin-top: 20px">
                <div class="col-md-4" style="display: flex; justify-content: flex-end">
                    <input type="submit" value="EDYTUJ swoje dane" class="btn btn-danger">
                </div>
            </div>

        </form>
    @endforeach

@endsection