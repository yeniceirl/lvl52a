@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        dd($matches)
        @for($i=0; $i<3; $i++)

            <div class="row">
                @for($j=0; $j<2; $j++)

                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <table class="table table-bordered">
                                <tr class="info">
                                    <th colspan="2">{{$matches[($i*6)+(($i+$j)*6)]->teams[0]->group}}</th>
                                </tr>
                                @for($k=0; $k<6; $k++)
                                    <tr>
                                        <td width="45%">{{$matches[($i*6)+(($i+$j)*6)+($k)]->date}}</td>
                                        <td width="45%">{{$matches[($i*6)+(($i+$j)*6)+($k)]->stadium}}</td>
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
