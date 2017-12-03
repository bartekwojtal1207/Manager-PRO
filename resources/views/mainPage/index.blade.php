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
            <div class="slider-item" style=" height: 190px;">
                <a href="#" style="width: 100%; height: 100%; display: block">
                    <p style="display: block; margin: auto; height: 100%; line-height: 165px" class="text-center">Przejdź do swojego profilu</p>
                </a>
            </div>
            <div class="slider-item" style=" height: 190px;">
                <a href="{{route('profile.index')}}" >
                    <img src="{{ asset('img/sliderPhoto/homeOffice2.jpg') }}" alt="edytuj swój profil" class="img-responsive">
                    <p class="text-center" style="margin-top: 5px; color: indianred; font-weight: bolder">Przejdź do swojego profilu</p>
                </a>
            </div>
            <div class="slider-item" style=" height: 165px;">
                <a href="{{route('team.index')}}" style="width: 100%; height: 100%; display: block"> team</a>
            </div>
        </div>
    </div>
</div>

@endguest

@endsection