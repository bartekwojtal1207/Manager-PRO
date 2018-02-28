{{-- this is profile page--}}
@extends('layouts.app')

@section('title','Profile')

@section('content')


    @if(isset(\Auth::user()->profile))
        <div class="row">
            <h4 style="margin-bottom: 20px;">Your profil: {{\Auth::user()->profile->name_profile}}</h4>
        </div>

        {{--@foreach( $profiles as $profile)--}}
            <div class="row" style="margin-bottom: 30px;">
                <div class="image" style="display: block; width: 19%;" >
                    @if( Storage::disk('local')->exists('public/images/images_profile/1avatar'))
                        <img src="{{ Storage::url('images/images_profile/'.$profile->user_id.'avatar') }}"  class="img-responsive">
                    @else
                        <img src="{{ Storage::url('images/avatar.png') }}"  class="img-responsive">
                    @endif
                </div>
                <table class="table table-hover table-responsive" style="width: 35%;">
                <tr>
                    <th>Firstname</th>
                    <td class="table-cell">{{$profile->name_profile}} </td>
                </tr>
                <tr>
                    <th>Lastname</th>
                    <td>{{$profile->surname_profile}} </td>
                </tr>
                <tr>
                    <th> Birthday: </th>
                    <td>{{$profile->birthday_profile}} </td>
                </tr>
                    <th>Twoja narodowość</th>
                    <td>{{$profile->country_profile}}</td>
                </tr>
                <tr>
                    <th>Nr telefonu: </th>
                    <td>{{$profile->tel_profile}}</td>
                </tr>
                <tr>
                    <th>adres mailowy:</th>
                    <td>{{$profile->email}}</td>
                </tr>
                </table>
            </div>
        {{--@endforeach--}}

        <div class="row" >
            <form method="post" action="{{route('profile.edit')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-warning" > EDYTUJ</button>
            </form>
            <form method="post" action="{{route('profile.destroy')}}" style="margin-left: 43px;">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="btn btn-danger" id="deleteProfileBtn">WYKASUJ</button>
            </form>
        </div>

    @else
        <div class="row">
            <div class="row">
                <h3 class="text-center" style="display: block;">Uzupełnij swoje dane</h3>
            </div>
            <div class="row">
                <p style="display: block; color: mediumseagreen;">jest to niezbędne do uzyskania wszystkich funkcji twojego profilu</p>
            </div>
            <div class="row">
                {{Form::open(array('route' => 'profile.store', 'files'=> true)) }}
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group col-md-3">
                    <label for="name_profile">Wpisz swoje imię :</label><br>
                    <input type="text" name="name_profile" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="surname_profile">Wpisz swoje nazwisko :</label><br>
                    <input type="text" name="surname_profile" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="birthday_profile">Wpisz swoją datę urodzenia :</label><br>
                    <input type="date" name="birthday_profile" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="phone_profile">Wpisz swój nr telefonu:</label><br>
                    <input type="tel" name="phone_profile" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="country_profile">Twoja narodowość:</label><br>
                    <input type="text" name="country_profile" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="country_profile">Dodaj swój avatar</label><br>
                    {{ Form::file('image',array('class' => 'form-control')) }}
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary" value="Wyślij">
                </div>
                {{ Form::close() }}
            </div>
        </div>
    @endif
    <a href="#" onClick="handleOutboundLinkClicks()">Play</a>


@endsection

@section('script-js')
    {{-- scritpt only for edit profile page--}}
    <script src="{{ asset('js/test.js') }}"></script>
    <script src="{{ asset('js/mainpage.js') }}"></script>
@endsection