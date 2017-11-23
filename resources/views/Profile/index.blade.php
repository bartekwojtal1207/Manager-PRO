{{-- this is profile page--}}
@extends('layouts.app')

@section('title','Profile')

@section('content')



    @if(isset(\Auth::user()->profile))
        <h4>Your profil: {{\Auth::user()->profile->name_profile}}</h4>
    <div class="row" style="display: flex;">
        @foreach( $profiles as $profile)
        <table class="table table-hover table-responsive" style="width: 35%;display: inline-block" >
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
                <td>{{Auth::user()->email}}</td>
            </tr>
        </table>
            <div class="image" style="display: inline-block">
                <img src="#" alt="nowe foto">
            </div>
        @endforeach
    </div>
    <div class="row" style="display: inline-block">
        <form method="post" action="{{route('profile.edit')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button class="btn btn-warning" > EDYTUJ</button>
        </form>
    </div>
    <div class="row" style="display: inline-block; margin-left: 50px">
        <form method="post" action="{{route('profile.destroy')}}" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <button class="btn btn-danger" id="deleteProfileBtn">WYKASUJ</button>
        </form>
    </div>
        @else
        <div class="row">
            <h3 class="text-center">Uzupełnij swoje dane</h3>
            <br><br>
        </div>
        <div class="row">
            <form method="post" action="{{route('profile.store')}}">
                <div class="row">
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
                        <label for="photo_profile">Dodaj swoje zdjęcie:</label><br>
                        <input type="file" name="photo_profile" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" class="btn btn-primary" value="Wyślij">
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <h2> Uzupełnij swoje dane</h2>
            <span>jest to niezbędne do uzyskania wszystkich funkcji twojego profilu</span>
        </div>
    @endif
    {{-- scritpt only for edit profile page--}}
@endsection

@section('script-js')
    <script src="{{ asset('js/test.js') }}"></script>
@endsection