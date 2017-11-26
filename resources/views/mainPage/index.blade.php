@extends('layouts.app')

@section("title","Personal Manager")

@section('content')

@guest

    <a href="{{route('login')}}"><h4>Zaloguj się</h4></a>
    <span>Jeżeli nie masz konta <a href="{{route('register')}}">zarejstruj się</a> </span>
@else
<div class="row">
    <div class="col-md-12">
        <h3 style="text-align: center">Witaj {{ \Illuminate\Support\Facades\Auth::user()->name}} !</h3>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="slider" style="width: 250px; height: 250px; margin: auto">
            <div class="slider-item" style="border: 1px solid  dodgerblue; height: 200px;">1</div>
            <div class="slider-item" style="border: 1px solid  dodgerblue; height: 200px;">2</div>
            <div class="slider-item" style="border: 1px solid  dodgerblue; height: 200px;">3</div>
        </div>
    </div>
</div>

@endguest

@endsection