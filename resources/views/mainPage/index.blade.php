@extends('layouts.app')

@section("title","Personal Manager")

@section('yt-background')
    @auth
    <div style="position: fixed; z-index: -99; width: 100%; height: 100%; top:0; left: 0;">
        <iframe frameborder="0" height="100%" width="100%"
                src="https://youtube.com/embed/HuN-aeCFOuA?autoplay=1&controls=0&showinfo=0&autohide=1&disablekb=1&fs=0&iv_load_policy=3&modestbranding=3&rel=0&showinfo=0">
        </iframe>
    </div>
    @endauth
@endsection

@section('content')

@guest
    <a href="{{route('login')}}"><h4>Zaloguj się</h4></a>
    <span>Jeżeli nie masz konta <a href="{{route('register')}}">zarejstruj się</a> </span>
@else
<div class="row">
    <div class="col-md-12">
        <h1 class="js-mainpage-title hidden">Witaj {{ \Illuminate\Support\Facades\Auth::user()->name}} !</h1>
            <div id="msg"></div>
    </div>
</div>
@endguest

@endsection

@section('script-js')
   @auth
    <script src="{{ asset('js/mainpage.js') }}"></script>
   @endauth
@endsection
