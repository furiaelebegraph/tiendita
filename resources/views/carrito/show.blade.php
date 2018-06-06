@extends('layouts.app')
@section('content')
	<div class="row justify-content-center">
		<div class="col-12">
			<header>
				<h2>Mi Carrito de Compras</h2>
			</header>
			<div class="card-body">
				@foreach($items->products as $item)
					<div class="">
						{{$item->nombre}}
					</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection