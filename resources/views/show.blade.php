@extends('layouts.application')

@section('show')

	<div class="row">

		<div class="col-lg-4 col-md-4 col-sm-6">
			<a href="{{ $specific_voyage->image}}" class="fh5co-card-item image-popup">
								<figure>
									<div class="overlay"><i class="ti-plus"></i></div>
									<img src="{{$specific_voyage->image}}" alt="Image" class="img-responsive">
								</figure>
								<div class="fh5co-text">
									<h2>{{ $specific_voyage->destination}}</h2>
									<p>{{ $specific_voyage->description}}</p>
									<p>{{ $specific_voyage->prix}} £</p>
									<p><a class="btn btn-primary" >BOOK THIS TRIP</a></p>
								
								</div>
							</a>					
		</div>
	</div>


@endsection