@extends('layouts.app')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="col-lg-4">
          <h2 class="sub-header">Add a new Reservation</h2>
          {!! Form::open(array('url' => 'reminder')) !!}
          	<div class="form-group">
			    {!! Form::label('Name') !!}
			    {!! Form::text('name', null,
			        array('class'=>'form-control', 
			              'placeholder'=>'Juan Perez')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Address') !!}
				{!! Form::text('address1', null,
                    array('class'=>'form-control',
                          'placeholder'=>'9000 NW 66 ST.')) !!}
			</div>
			<div class="form-group">
				{!! Form::text('address2', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Miami, FL')) !!}
			</div>
			<div class="form-group">
				{!! Form::text('address3', null,
                    array('class'=>'form-control',
                          'placeholder'=>'33195-2698')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Priority') !!}
				<select class= "form-control" name="priority_id" id="priority_id">
					<option value="0">No priority</option>
					@foreach($priorities as $p)
						<option value="{{$p->id}}">{{ $p->description }}</option>
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