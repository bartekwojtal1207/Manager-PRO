{{-- this is Team page--}}
@extends('layouts.app')

@section('title','Your team')

@section('content')
    {{--the code below is run when form below below send error message--}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h3> Dodaj swój zespół </h3>
                {{$rules_team_checkbox. 'rules'}}
                <br>
                {{$active_team_checkbox. 'active'}}
            </div>

            <div class="col-md-4">
                <div id="addDataTeam" >
                    {{Form::open(array('route' => 'team.store', 'files'=> true)) }}
                    <br>
                        <div class="form-group">
                            {{Form::label('name_team', 'Wpisz nazwę zespołu: ') }}
                            <br>
                            {{Form::text('name_team', null, array('class'=>'form-control', 'id'=>'name_team','placeholder'=>'Wpisz nazwę drużyny', 'data-bind' =>'attr : {readOnly : isDisabled }', 'required' => ' '))  }}
                        </div>

                        <div class="form-group">
                            {{Form::label('founded_team', 'Wpisz rok założenia: ') }}
                            <br>
                            {{Form::date('founded_team',null, array('class'=>'form-control','id'=>'founded_team','data-bind' =>'attr : {readOnly : isDisabled}', 'required' => ' ')) }}
                        </div>

                        <!-- ko if: active_team_checkbox -->
                        <div class="form-group">
                            {{Form::label('country_team', 'Wpisz nazwę związku: ') }}
                            <br>
                            {{Form::text('country_team',null, array('class'=>'form-control', 'id'=>'country_team','placeholder'=>'Wpisz nazwę drużyny','data-bind' =>'attr : {readOnly : isDisabled}')) }}
                        </div>
                        <!-- /ko -->

                        <div class="checkbox form-group">
                            {{-- zaznaczenie checkboxa jest przechowywane w sesji ( po odświeżeniu strony checkbox będzie dalej zaznaczony po 120 minutach ) --}}
                            @if( ! $rules_team_checkbox )
                            {{Form::label('rules_team_checkbox', 'Akceptuję regulamin odnośnie drużyn w Manager-PRO-system', array('style'=>'margin-left: -22px;', 'data-bind' => 'ifnot: rules_team_checkbox')) }}
                            @endif
                            <br>
                            {{Form::checkbox('rules_team_checkbox', true , $rules_team_checkbox ? true : false , array('style'=>'margin-left: 0px;','id'=>'rules_team_checkbox')) }}
                            <br/>
                            @if(  $rules_team_checkbox )
                            <span style="margin-left: 20px;"  > Dziękujemy i zapraszamy do wspólnej zabawy <span style="color:red">*</span></span>
                            @endif
                        </div>
                    {{--problem wystepule w polaczenou knockout js i laravel sessison wymsylic jak polaczyc ewentualnie zrobic event na klik i wtedy pokazywac ukryty label--}}


                        {{--<div class="checkbox form-group">--}}
                            {{--{{Form::label('active_team_checkbox', 'Ustaw jako aktywny', array('style'=>'margin-left: -22px;', ' data-bind'=>'ifnot: active_team_checkbox, ')) }}--}}
                            {{--<br>--}}
                            {{--{{Form::checkbox('active_team_checkbox', true, $active_team_checkbox ? true : false , array('style'=>'margin-left: 0px;','id'=>'active_team_checkbox', 'data-bind' => 'checked: active_team_checkbox')) }}--}}
                            {{--<br/>--}}
                            {{--<span style="margin-left: 20px;" data-bind="if: active_team_checkbox"> TEN zespół będzie ustawiony jako aktywny <span style="color:red">*</span></span>--}}
                        {{--</div>--}}

                    {{--zrobic input na dodanie herbu--}}
                        <div class="form-group">
                            <button data-bind="click : block">Zatwierdź</button>
                        </div>

                        <div class="form-group">
                            {{Form::submit('wyślij')}}
                        </div>
                    {{Form::close()}}
                </div>
            </div>
            <div class="col-md-6">
                <table class="table table-active table-responsive table-striped table-bordered table-hover table-info" style="width: 92.5%" >
                    <tr><th>Nazwa zespołu</th><th>zwycięstwo</th><th>remis</th><th>porażka</th> <th>gol +</th> <th>gol -</th><th>punkty</th></tr>
                    <tbody data-bind="foreach: people">
                        <tr>
                            <td data-bind="text: firstName"> - </td>
                            <td data-bind="text: lastName"> - </td>
                            <td  data-bind="text: test"> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td data-bind="text: testKraj"> - </td>
                            <td> - </td>
                            {{--zrobione testowo ale wszystko działa --}}
                        </tr>
                    </tbody>
                </table>
            </div>
            <p data-bind="with: coords">
                Latitude: <span data-bind="text: latitude"> </span>,
                Longitude: <span data-bind="text: longitude"> </span>
            </p>


        </div>

    </div>


@endsection


@section('script-js')
    <script src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js') }}"></script>
    {{--<script src="{{url(https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js)}}" type="text/javascript"></script>--}}
    <script src="{{ asset('js/team.js') }}" type="text/javascript"></script>
@endsection
