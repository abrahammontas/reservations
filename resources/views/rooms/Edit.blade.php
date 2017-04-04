@extends('layouts.app')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="col-lg-4">
          <h2 class="sub-header">Edit Room ({{$room->description}})</h2>
          {!! Form::model($hotel, array('route' => array('hotel.update', $hotel->id),'method' => 'put')) !!}
			<div class="form-group">
				{!! Form::label('Description') !!}
				{!! Form::text('description', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Deluxe')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Hotel') !!}
				<select class= "form-control" name="hotel_id" id="hotel_id">
					<option value="0">No hotel</option>
					@foreach($hotels as $h)
						@if($h->id == $room->hotel_id)
						<option value="{{$h->id}}">{{ $h->name }}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				{!! Form::label('Facts Sheet') !!}
				{!! Form::text('factSheet', null,
                    array('class'=>'form-control',
                          'placeholder'=>'factSheetSamana.doc')) !!}
			</div>
        		<button class="btn btn-primary btn-block" type="submit">Edit</button>
		  {!! Form::close() !!}
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