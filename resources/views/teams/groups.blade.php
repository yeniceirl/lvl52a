@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel">
                    @for($i=0; $i<24; $i+=4)
                        <table class="table table-bordered">
                            <tr class="info">
                                <th>Group:{{$teams[$i]->group}} - Teams Name</th> <th>P</th> <th>W</th> <th>D</th> <th>L</th> <th>F</th> <th>A</th> <th>+/-</th> <th>Pts</th>
                            </tr>
                            @for($j=0; $j<=3; $j++)
                                <tr>
                                    <td width="50%"> <img src="{{URL::asset('images/flags/32/'.$teams[$i+$j]->flag)}}" alt="flag"> {{ $teams[$i+$j]->name }} </td>
                                    <td width="5%"> {{$teams[$i+$j]->mp}} </td>
                                    <td width="5%"> {{$teams[$i+$j]->mw}} </td>
                                    <td width="5%"> {{$teams[$i+$j]->md}} </td>
                                    <td width="5%"> {{$teams[$i+$j]->ml}} </td>
                                    <td width="5%"> {{$teams[$i+$j]->gf}} </td>
                                    <td width="5%"> {{$teams[$i+$j]->ga}} </td>
                                    <td width="5%"> {{$teams[$i+$j]->gd}} </td>
                                    <td width="10%"> {{$teams[$i+$j]->pt}} </td>
                                </tr>
                            @endfor
                        </table>
                    @endfor

                </div>
            </div>
        </div>
    </div>
@endsection
