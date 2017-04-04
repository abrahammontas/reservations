@extends('layouts.app')

@section('content')

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

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="col-lg-4">
          <h2 class="sub-header">Edit reservation ({{$reservation->description}})</h2>
          {!! Form::model($reservation, array('route' => array('reservation.update', $reservation->id),'method' => 'put')) !!}
			<div class="form-group">
				{!! Form::label('Group name') !!}
				{!! Form::text('name', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Birthday party')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('Contact name') !!}
				{!! Form::text('contactName', null,
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
				{!! Form::label('Phone') !!}
				{!! Form::text('contactPhone', null,
                    array('class'=>'form-control',
                          'placeholder'=>'305-555-5555')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Fax') !!}
				{!! Form::text('contactFax', null,
                    array('class'=>'form-control',
                          'placeholder'=>'305-555-5555')) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Email') !!}
				{!! Form::text('contactEmail', null,
                    array('class'=>'form-control',
                          'placeholder'=>'j.perez@gmail.com')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('Adults') !!}
				{!! Form::text('adults', null,
                    array('class'=>'form-control',
                          'placeholder'=>'4')) !!}
			</div>

			<div class="form-group">
				{!! Form::label('Arrival date') !!}
				<div class='input-group date' id='arrivalDate'>
					<input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('Departure date') !!}
				<div class='input-group date' id='departureDate'>
					<input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
				</div>
			</div>

        		<button class="btn btn-primary btn-block" type="submit">Edit</button>
		  {!! Form::close() !!}
		</div>	
</div>


@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment-with-locales.min.js"></script>
	<script src="https://cdn.jsdelivr.net/bootstrap.datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<script>

		$('#arrivalDate').datetimepicker({
			format: 'L',
			minDate: moment()
		});
		$('#departureDate').datetimepicker({
			format: 'L',
			useCurrent: false //Important! See issue #1075
		});
		$("#arrivalDate").on("dp.change", function (e) {
			$('#departureDate').data("DateTimePicker").minDate(e.date);
		});
		$("#departureDate").on("dp.change", function (e) {
			$('#arrivalDate').data("DateTimePicker").maxDate(e.date);
		});
	</script>
@endsection