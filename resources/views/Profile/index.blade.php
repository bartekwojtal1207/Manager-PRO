{{-- this is profile page--}}
@extends('layouts.app')

@section('title','Profile')

@section('content')
    <div class="row">
        <h3 class="text-center">Uzupełnij swoje dane</h3>
        <br><br>
    </div>
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
            {{--<div class="form-group col-md-3">--}}
                {{--<label for="birthday_profile">Wpisz swoją datę urodzenia :</label><br>--}}
                {{--<input type="date" name="birthday_profile" class="form-control">--}}
            {{--</div>--}}
            {{--<div class="form-group col-md-3">--}}
                {{--<label for="phone_profile">Wpisz swój nr telefonu:</label><br>--}}
                {{--<input type="tel" name="phone_profile" class="form-control">--}}
            {{--</div>--}}
        </div>
        <div class="row">
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary" value="Wyślij">
            </div>
        </div>
    </form>
    <div class="row">
            <ul class="list-group">

            </ul>
    </div>
    <div class="row">
        <table class="table table-hover">
            <h4>Your profil: {{\Auth::user()->profile->name_profile}}</h4>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
            </tr>
            <tr>
                <td>{{\Auth::user()->profile->name_profile}}</td>
                <td>{{\Auth::user()->profile->surname_profile}}</td>
            </tr>
        </table>
    </div>



@endsection