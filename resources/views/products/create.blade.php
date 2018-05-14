@extends('layouts.app')
@section('content')
	<div class="centro_900">
		<div class="card">
			<header>
				<h3>Potato</h3>
			</header>
			@if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
			@if(Session::has('mensaje'))
			    <div class="alert alert-primary">
			        {{ Session::get('mensaje') }}
			    </div>
			@endif
			<div class="card-body">
				@include('products.form')
			</div>
		</div>
	</div>
@endsection