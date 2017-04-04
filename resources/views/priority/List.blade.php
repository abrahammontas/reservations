@extends('layouts.app')

@section('content')

  <div class="col-sm-12 col-md-12 main">
          <h2 class="sub-header">Priorities list</h2>
          <div class='<?php if(isset($class)){echo $class;}?>'>
            <?php if(isset($message)){echo $message;}?>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Description</th>
                  <th>Color</th>
                </tr>
              </thead>
              <tbody>
                @foreach($priorities as $p)
                <tr>
                  <td>{{ $p->id }}</td>
                  <td>{{ $p->description }}</td>
                    <td> <div style="border-radius: 4px; background-color:{{$p->color}};">{{ $p->color }} </div></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection