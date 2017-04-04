@extends('layouts.app')

@section('content')

  <div class="col-sm-12 col-md-12 main">
          <h2 class="sub-header">Rooms list</h2>
          <div class='<?php if(isset($class)){echo $class;}?>'>
            <?php if(isset($message)){echo $message;}?>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Hotel</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rooms as $r)
                <tr>
                  <td>{{ $r->id }}</td>
                  <td>{{ $r->description }}</td>
                  <td>{{ $r->hotel->name }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection