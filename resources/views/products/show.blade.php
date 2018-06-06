@extends('layouts.app')
@section('content')
	<div class="row justify-content-center">
		@if(session()->has('errors'))
			{{session()->get('errors')}}
		@endif
		<div class="col col-sm-10 col-md-7">
			<div class="card">
				<header class="padding text-center bg-primary">
					
				</header>
				<div class="card-body padding">
					<h1 class="card-title">{{$producto->nombre}}</h1>
					<h4 class="card-subtitle">{{$producto->precio}}</h4>
					<p class="card-text">{{$producto->descripcionCorta}}</p>
					<div class="card-actions">
						<add-to-cart :product='{!! $producto !!}'></add-to-cart>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection