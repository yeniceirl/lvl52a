@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        @for($i=0; $i<3; $i++)
            <div class="row">
                @for($j=0; $j<2; $j++)
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <table class="table table-bordered">
                                <tr class="info">
                                    <th colspan="3">{{$matches[($i*6)+(($i+$j)*6)]->teams[0]->group}}</th>
                                </tr>
                                @for($k=0; $k<6; $k++)
                                    <tr class="match">
                                        <td>{{$matches[($i*6)+(($i+$j)*6)+($k)]->date}}</td>
                                        <td></td>
                                        <td class="text-right">{{$matches[($i*6)+(($i+$j)*6)+($k)]->stadium}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src="{{URL::asset('images/flags/32/'.$matches[($i*6)+(($i+$j)*6)+($k)]->teams[0]->flag)}}"
                                                 alt="flag">
                                            {{$matches[($i*6)+(($i+$j)*6)+($k)]->teams[0]->name}}
                                        </td>
                                        <td class="text-center">VS</td>
                                        <td class="text-right">
                                            <img src="{{URL::asset('images/flags/32/'.$matches[($i*6)+(($i+$j)*6)+($k)]->teams[1]->flag)}}"
                                                 alt="flag">
                                            {{$matches[($i*6)+(($i+$j)*6)+($k)]->teams[1]->name}}
                                        </td>
                                    </tr>
                                @endfor
                            </table>
                        </div>
                    </div>
                @endfor
            </div>
        @endfor
    </div>
@endsection
