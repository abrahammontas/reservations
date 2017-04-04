@extends('layouts.app')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		<div class="col-lg-4">
          <h2 class="sub-header">Add a new hotel</h2>
          {!! Form::open(array('url' => 'hotel')) !!}
          	<div class="form-group">
			    {!! Form::label('Name') !!}
			    {!! Form::text('name', null,
			        array('class'=>'form-control', 
			              'placeholder'=>'Viva Wyndham Resort Samana')) !!}
			</div>
            <div class="form-group">
                {!! Form::label('Hotel information') !!}
                {!! Form::textarea('hotelInfo', null,
                    array('class'=>'form-control')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Weeding file') !!}
                {!! Form::text('weddingFile', null,
                    array('class'=>'form-control',
			              'placeholder'=>'weddingSamana.doc')) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Facts Sheet') !!}
                {!! Form::text('factSheet', null,
                    array('class'=>'form-control',
			              'placeholder'=>'factSheetSamana.doc')) !!}
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