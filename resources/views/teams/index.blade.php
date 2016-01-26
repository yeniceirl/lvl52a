@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <table class="table table-striped">
                    @for ($i = 0; $i < 24; $i+=4)
                        <tr>
                        @for ($j = 0; $j <=3; $j++)
                            <td width="24%" align="center">
                                <a href="#">
                                    <img src="{{URL::asset('images/flags/32/'.$teams[$i+$j]->flag)}}" alt="flag">
                                    <br>
                                    {{ $teams[$i+$j]->name }}
                                </a>
                            </td>
                        @endfor
                        </tr>
                    @endfor
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
