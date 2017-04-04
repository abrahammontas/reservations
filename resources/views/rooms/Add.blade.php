@extends('layouts.app')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="col-lg-4">
          <h2 class="sub-header">Add a new room</h2>
          {!! Form::open(array('url' => 'room')) !!}
          	<div class="form-group">
			    {!! Form::label('Description') !!}
			    {!! Form::text('description', null,
			        array('class'=>'form-control', 
			              'placeholder'=>'Deluxe')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Hotel') !!}
				<select class= "form-control" name="hotelId" id="hotelId">
					<option value="0">No hotel</option>
					@foreach($hotels as $h)
						<option value="{{$h->id}}">{{ $h->name }}</option>
					@endforeach
				</select>
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