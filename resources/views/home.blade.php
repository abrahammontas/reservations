@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Reminders</div>

                <div class="panel-body">

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Reservation</th>
                                <th>Description</th>
                                <th>Priority</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($reminders as $r)
                                <tr>
                                    <td>{{ $r->id }}</td>
                                    <td>{{ $r->reservation->name }}</td>
                                    <td>{{ $r->description }}</td>
                                    <td> <div style="border-radius: 4px; background-color:{{$r->priority->color}};">{{ $r->priority->description }} </div></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
