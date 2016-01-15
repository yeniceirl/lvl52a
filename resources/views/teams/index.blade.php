@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <table class="table table-striped">
                    <tr>
                        <th>Teams Name</th> <th>P</th> <th>W</th> <th>D</th> <th>L</th> <th>F</th> <th>A</th> <th>+/-</th> <th>Pts</th>
                    </tr>
                    @foreach($teams as $team)
                        <tr>
                            <td width="50%"> <img src="{{URL::asset('images/flags/32/'.$team->flag)}}" alt="flag"> {{ $team->name }} </td>
                            <td width="5%"> {{$team->mp}} </td>
                            <td width="5%"> {{$team->mw}} </td>
                            <td width="5%"> {{$team->md}} </td>
                            <td width="5%"> {{$team->ml}} </td>
                            <td width="5%"> {{$team->gf}} </td>
                            <td width="5%"> {{$team->ga}} </td>
                            <td width="5%"> {{$team->gd}} </td>
                            <td width="10%"> {{$team->pt}} </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>
@endsection
