@extends('layouts.app')

@section('content')

  <div class="col-sm-12 col-md-12 main">
          <h2 class="sub-header">Reminders list</h2>
          <div class='<?php if(isset($class)){echo $class;}?>'>
            <?php if(isset($message)){echo $message;}?>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Reservation</th>
                  <th>Description</th>
                  <th>User</th>
                </tr>
              </thead>
              <tbody>
                @foreach($reminders as $r)
                <tr>
                  <td>{{ $r->name }}</td>
                  <td><a href="{{ $r->reservation->name }}">{{ $r->reservation->name }}</a></td>
                  <td>{{ $r->description }}</td>
                  <td>{{ $r->user->name }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection