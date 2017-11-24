@extends('layouts.app')

@section('title','Profile/edit')

@section('content')
    <div class="row" style="margin-bottom: 15px;">

        <div class="row">
            <div class="col-md-12">
                <div id="edit_profile"></div>
                <h3 style="margin-bottom: 15px;"> Edytuj swoje dane :</h3>
                @foreach ($profiles as $profile)
                    <form method="post" action="{{route('profile.update')}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="row">
                            <div class="col-md-6" style="display: flex; justify-content: center">
                                <p style="color: gray; line-height: 34px; font-size: 14px;">Imię</p>
                            </div>
                            <div class="col-md-6" >
                                <input type="text" class="form-control" name="name_profile" placeholder="{{$profile->name_profile === null ? ' wpisz swoje imię' : $profile->name_profile}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" style="display: flex; justify-content: center">
                                <p style="color: gray; line-height: 34px; font-size: 14px;">Nazwisko</p>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name_profile" placeholder="{{$profile->surname_profile === null ? ' wpisz swoje nazwisko' : $profile->surname_profile}}">
                            </div>
                        </div>

                        <div class="row" >
                            <div class="col-md-6" style="display: flex; justify-content: center">
                                <p style="color: gray; line-height: 34px; font-size: 14px;">Numer telefonu</p>
                            </div>
                            <div class="col-md-6">
                                <input type="text"  class="form-control"  name="name_profile" placeholder="{{$profile->tel_profile === null ? ' wpisz swój numer telefonu' : $profile->tel_profile}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" style="display: flex; justify-content: center">
                                <p style="color: gray; line-height: 34px; font-size: 14px;">Data urodzenia</p>
                            </div>
                            <div class="col-md-6">
                                <input type="text"  class="form-control" name="name_profile" placeholder="{{$profile->birthday_profile === null ? ' wpisz  datę urodzenia' : $profile->birthday_profile}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6" style="display: flex; justify-content: center">
                                <p style="color: gray; line-height: 34px; font-size: 14px;"> Twój kraj</p>
                            </div>
                            <div class="col-md-6">
                                <input type="text"  class="form-control" name="name_profile" placeholder="{{$profile->country_profile === null ? ' uzupełnij swój kraj' : $profile->country_profile }} ">
                            </div>
                        </div>

                        <div class="row" style="margin-top: 15px;">
                            <div class="col-md-12" style="display: flex; justify-content: flex-end">
                                <input type="submit" value="EDYTUJ swoje dane" class="btn btn-danger">
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>

        {{--<div class="row">--}}
            <div class="col-md-12">
                <div id="edit_profile_acount">
                    tutaj uzupelnic profil danymi{{\Auth::user()->email }}
                </div>
            </div>
        {{--</div>--}}

    </div>
@endsection