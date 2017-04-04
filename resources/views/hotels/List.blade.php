@extends('layouts.app')

@section('content')

  <div class="col-sm-12 col-md-12 main">
          <h2 class="sub-header">Hotel list</h2>
          <div class='<?php if(isset($class)){echo $class;}?>'>
            <?php if(isset($message)){echo $message;}?>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Wedding file</th>
                  <th>Facts sheet</th>
                  <th>Website link</th>
                </tr>
              </thead>
              <tbody>
                @foreach($hotels as $h)
                <tr>
                  <td>{{ $b->id }}</td>
                  <td>{{ $b->name }}</td>
                  <td>{{ $b->weddingFile }}</td>
                  <td>{{ $b->factSheet }}</td>
                  <td>{{ $b->link }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection