@extends('layouts.app')

@section('content')

  <div class="col-sm-12 col-md-12 main">
          <h2 class="sub-header">Reservations list</h2>
          <div class='<?php if(isset($class)){echo $class;}?>'>
            <?php if(isset($message)){echo $message;}?>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Created at</th>
                  <th>Last time edited</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                @foreach($reservations as $r)
                <tr>
                  <td>{{ $r->id }}</td>
                  <td>{{ $r->name }}</td>
                  <td>{{ $r->address1." ".$r->address2." ".$r->address3 }}</td>
                  <td>{{ $r->created_at }}</td>
                  <td>{{ $r->updated_at }}</td>
                  <td>
                    //workflow de como se agregara fechas, rooms, etc (entrar a app vieja)
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection