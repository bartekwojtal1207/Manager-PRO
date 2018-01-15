@extends('layouts.app')

@section('style-css')
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-8 col-md-offset-3">
           <div class="logo-register">
               <img src="{{ Storage::url('logo/logo.png') }}"  class="img-responsive">
               <img src="{{ Storage::url('logo/logo-string.png') }}"  class="img-responsive">
           </div>
       </div>

        <div class="row">
            <div class="col-md-5">
                <div class="col-md-12 col-sm-12 col-xs-12" style="border: 1px solid black;">
                    <div class="panel-body">
                        <span>Register forms</span>
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Username">

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <input id="password" type="password" class="form-control" name="password" required placeholder="Password">
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class=" form-group form-check">
                                <div class="col-md-12">
                                    <input type="checkbox" name="register-checkbox">
                                    <label for="register-checkbox">I have read and accept the terms of use</label>
                                </div>


                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn-register-confirm">
                                        Sign Up
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    {{Form::open(array('route' => 'register', 'files'=> true)) }}
                    {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-12">
                                {{Form::text('name-mail-sender', '', array('class' => 'form-control','placeholder'=>'Your name'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                {{Form::text('email-seder', '', array('class' => 'form-control','placeholder'=>'Your mail'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                {{Form::textarea('message-sender', '', array('class'=> 'form-control', 'placeholder'=>'Your message ...'))}}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                {{Form::checkbox('agree-sender', 'agree-sender')}}
                                {{Form::label('agree-sender', 'Send a copy to my Email')}}
                            </div>
                        </div>
                    {{Form::close()}}
                </div>
            </div>

            <div class="col-md-5 col-md-offset-1">
                <div class="col-md-12 col-sm-12 col-xs-12" style="border: 1px solid black;">

                    <div class="panel-body">
                        <span>cos tam cos tam</span>
                        {{Form::open(array('route' => 'login', 'files'=> true, 'class'=>'form-horizontal')) }}
                            {{ csrf_field() }}
                            <div class="form-group {{$errors->has('email') ? ' has-error' : ''}}">
                                <div class="col-md-12">
                                    {{Form::text('email', 'email', array('class' => 'form-control','placeholder'=>'Your name'))}}
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    {{Form::password('password', array('class' => 'form-control', 'placeholder'=> 'Password') )}}
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group form-check-inline">
                                <div class="col-md-12">
                                    {{Form::checkbox('remember', '')}}
                                    {{Form::label('remember', 'Remember Me')}}
                                </div>


                            </div>

                        {{Form::close()}}
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12" style="border: 1px solid black;">

                    <div class="panel-body">
                        <span>cos tam cos tam 2</span>
                        {{Form::open(array('route' => 'register', 'files'=> true, 'class'=>'form-horizontal')) }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-md-12">
                                    {{Form::email('email-recovery', '', array('class' => 'form-control','placeholder'=>'Enter your Mail'))}}
                                </div>
                            </div>
                            <div class="form-group {{$errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-12">
                                    {{Form::number('phone-recovery','', array('class' => 'form-control', 'placeholder'=> 'Enter your Phone number') )}}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {{Form::button('Send', array('class'=>'btn','id'=>'send-recovery'))}}
                                    {{Form::button('Done', array('class'=>'btn','id'=>'done-recovery'))}}
                                </div>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12" style="border: 1px solid black;">

                    <div class="panel-body">
                        <span>cos tam cos tam 3</span>
                        {{Form::open(array('route' => 'register', 'files'=> true, 'class'=>'form-horizontal')) }}
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-md-12">
                                    {{Form::email('email-subscribe', '', array('class' => 'form-control','placeholder'=>'Enter your Mail'))}}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    {{Form::button('Subscribe', array('class'=>'btn','id'=>'send-subscribe'))}}
                                    {{Form::button('No, Thanks', array('class'=>'btn','id'=>'no-send-subscribe'))}}
                                </div>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>

        </div><!-- end row-->
    </div>
</div>
@endsection
