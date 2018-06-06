@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			{{$autorpotato}}
			{{$canallin}}
			@if(Session::has('mensaje'))
			<div class="col-12">
				<div class="alert alert-info">
			        {{ Session::get('mensaje') }}
			    </div>
			</div>
			@endif
			<div class="">
				@foreach($productos as $product)
					<div class="card padding">
						<header>
							<h2 class="card-title">
								{{$product->nombre}}
							</h2>
							<img src=" {{ asset('img/'.$product->caratula) }}" alt="">
						</header>
					</div>
				@endforeach
				<products-component></products-component>
			</div>
		</div>
	</div>

@endsection()