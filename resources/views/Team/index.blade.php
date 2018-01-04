{{-- this is Team page--}}
@extends('layouts.app')

@section('title','Your team')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3> Dodaj swój zespół </h3>
                @foreach ($team_name as $team)
                        <p>{{$team}}</p>
                    {{--wyswietla wszystkie nazwy teamow dla wybranego uzytkowniak--}}
                @endforeach
            </div>

            <div class="col-md-4">
                <div id="addDataTeam" >
                    {{Form::open(array('route' => 'team.store', 'files'=> true)) }}
                    <br>
                        <div class="form-group">
                            {{Form::label('name_team', 'Wpisz nazwę zespołu: ') }}
                            <br>
                            {{Form::text('name_team', null, array('class'=>'form-control',
                                'id'=>'name_team',
                                'placeholder'=>'Wpisz nazwę drużyny',
                                'data-bind' =>'attr : {readOnly : isDisabled }',
                                'required' => ' ')) }}
                            <span style="color: red;"> {{ ($errors->first('name_team')) }}</span>
                        </div>

                        <div class="form-group">
                            {{Form::label('founded_team', 'Wpisz rok założenia: ') }}
                            <br>
                            {{Form::date('founded_team','' , array('class'=>'form-control',
                                'id'=>'founded_team',
                                'data-bind' =>'attr : {readOnly : isDisabled, value: founded_team}',
                                'required' => ' ')) }}
                            <span style="color: red;"> {{ ($errors->first('founded_team')) }}</span>
                        </div>

                        <!-- ko if: active_team_checkbox -->
                        <div class="form-group">
                            {{Form::label('country_team', 'Wpisz nazwę związku: ') }}
                            <br>
                            {{Form::text('country_team',null, array('class'=>'form-control',
                                'id'=>'country_team',
                                'placeholder'=>'Wpisz nazwę drużyny',
                                'data-bind' =>'attr : {readOnly : isDisabled}')) }}
                            <span style="color: red;"> {{ ($errors->first('country_team')) }}</span>
                        </div>
                        <!-- /ko -->

                        <div class="checkbox form-group">
                            {{Form::label('rules_team_checkbox', 'Akceptuję regulamin odnośnie drużyn w Manager-PRO-system',
                             array('style'=>'margin-left: -22px;color: green;', 'data-bind' => 'ifnot: rules_team_checkbox')) }}
                            <br>
                            {{Form::checkbox('rules_team_checkbox', true , $rules_team_checkbox,
                            array('style'=>'margin-left: 0px;','id'=>'rules_team_checkbox','data-bind' => 'checked: rules_team_checkbox')) }}
                            <br/>
                            <span style="margin-left: 20px;"  data-bind="if: rules_team_checkbox" > Dziękujemy i zapraszamy do wspólnej zabawy
                                <span style="color:red">*</span></span>
                            <span style="color: red;" data-bind="ifnot: rules_team_checkbox" > {{ ($errors->first('rules_team_checkbox')) }}</span>
                        </div>

                        <div class="checkbox form-group">
                            {{Form::label('active_team_checkbox', 'Ustaw jako aktywny',
                                array('style'=>'margin-left: -22px; color: green;',
                                'data-bind'=>'ifnot: active_team_checkbox, ')) }}
                            <br>
                            {{Form::checkbox('active_team_checkbox', true, $active_team_checkbox ? true : false ,
                                array('style'=>'margin-left: 0px;','id'=>'active_team_checkbox',
                                'data-bind' => 'checked: active_team_checkbox')) }}
                            <br/>
                            <span style="margin-left: 20px;" data-bind="if: active_team_checkbox"> TEN zespół będzie ustawiony jako aktywny
                                <span style="color:red">*</span></span>
                            <span style="color: red;" data-bind="ifnot: active_team_checkbox" > {{ ($errors->first('active_team_checkbox')) }}</span>
                        </div>

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
                <table class="table table-active table-responsive table-striped table-bordered table-hover table-info" style="width: 92.5%; font-size: 12px;" >
                    <tr><th>Nazwa zespołu</th><th>zwycięstwo</th><th>remis</th><th>porażka</th> <th>gol +</th> <th>gol -</th><th>punkty</th></tr>
                    <tbody data-bind="foreach: people">
                        <tr>
                            {{--zrobic pobieranie z bazy--}}
                            <td data-bind="text: firstName"> - </td>
                            <td data-bind="text: lastName"> - </td>
                            <td  data-bind="text: test"> - </td>
                            <td> - </td>
                            <td> - </td>
                            <td data-bind="text: testKraj"> - </td>
                            <td> - </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection

@section('script-js')
    <script src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script src="{{ URL::to('https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js') }}"></script>
    {{--<script src="{{url(https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js)}}" type="text/javascript"></script>--}}
    <script src="{{ asset('js/team.js') }}" type="text/javascript"></script>
@endsection
