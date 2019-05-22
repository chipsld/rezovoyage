@extends('layouts.application')

@section('voyages')

<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Trip With Your Favourite Destination</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
					@foreach($voyages as $voyage)

						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="{{ $voyage->image}}" class="fh5co-card-item image-popup">
								<figure>
									<div class="overlay"><i class="ti-plus"></i></div>
									<img src="{{$voyage->image}}" alt="Image" class="img-responsive">
								</figure>
								<div class="fh5co-text">
									<h2>{{ $voyage->destination}}</h2>
									<p>{{ $voyage->description}}</p>
									<p>{{ $voyage->prix}} £</p>
									<p><a class="btn btn-primary" href="{{ route('oneVoyage',['id_voyage'=>$voyage->id]) }}" >Schedule a Trip</a></p>
								
								</div>
							</a>
						</div>

					@endforeach
			</div>
		</div>
	</div>
	
@endsection