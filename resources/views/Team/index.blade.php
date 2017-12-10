{{-- this is Team page--}}
@extends('layouts.app')

@section('title','Your team')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h3> Dodaj swój zespół </h3>
            </div>

            <div class="col-md-4">
                <div id="addDataTeam" >
                    {{Form::open(array('route' => 'team.store', 'files'=> true)) }}
                    <br>
                        <div class="form-group">
                            {{Form::label('name_team', 'Wpisz nazwę zespołu: ') }}
                            <br>
                            {{Form::text('name_team',' ', array('class'=>'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{Form::label('founded_team', 'Wpisz rok założenia: ') }}
                            <br>
                            {{Form::date('founded_team',' ', array('class'=>'form-control')) }}
                        </div>

                        <div class="form-group">
                            {{Form::label('country_team', 'Wpisz nazwę związku: ') }}
                            <br>
                            {{Form::text('country_team',' ', array('class'=>'form-control')) }}
                        </div>

                        <div class="checkbox form-group">
                            {{Form::label('active_team', 'Ustaw jako aktywny', array('style'=>'margin-left: -22px;')) }}
                            <br>
                            {{Form::checkbox('active_team', '', false, array('style'=>'margin-left: 0px;')) }}
                        </div>
                    {{--zrobic input na dodanie herbu--}}

                    {{Form::close()}}
                </div>
            </div>
            <div class="col-md-6">
                <table class="table table-active table-responsive table-striped table-bordered table-hover table-info" style="width: 92.5%">
                    <tr><th>Nazwa zespołu</th><th>zwycięstwo</th><th>remis</th><th>porażka</th> <th>gol +</th> <th>gol -</th><th>punkty</th></tr>
                    <tr><td> - </td><td> - </td><td> - </td><td> - </td><td> - </td><td> - </td><td> - </td></tr>
                </table>
            </div>


        </div>

    </div>


@endsection


@section('script-js')
    <script src="{{ asset('js/team.js') }}" type="text/javascript"></script>
@endsection

