@extends('layouts.app')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="col-lg-4">
          <h2 class="sub-header">Add a new history</h2>
          {!! Form::open(array('url' => 'history')) !!}
			<div class="form-group">
				{!! Form::label('Reservation') !!}
				{!! Form::text('reservationId', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Family Trip')) !!}
			</div>
          	<div class="form-group">
			    {!! Form::label('Description') !!}
			    {!! Form::text('description', null,
			        array('class'=>'form-control', 
			              'placeholder'=>'Family Trip')) !!}
			</div>
        		<button class="btn btn-primary btn-block" type="submit">Add</button>
		  {!! Form::close() !!}
			<br>
		</div>			
</div>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="col-lg-4">
		    @if (count($errors) > 0)
				<div class="alert alert-danger">
						<ul>
			    		@foreach($errors->all() as $error)
				     	   <li>{{ $error }}</li>
			    		@endforeach
			    	</ul>
			    </div>
			@endif
		</div>	

</div>

@endsection