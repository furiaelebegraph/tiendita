{!! Form::open(['url' => '/producto', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}

	<div class="">
		{!! Form::label('nombre','Titulo del Producto') !!}
		{!! Form::text('nombre', '',['class' => 'form-control']) !!}
	</div>
	<div class="">
		{!! Form::label('precio','Precio del Producto') !!}
		{!! Form::number('precio', 0,['class' => 'form-control']) !!}
	</div>
	<div class="">
		{!! Form::label('descripcionCorta','Descripcion corta del Producto') !!}
		{!! Form::text('descripcionCorta','Agrega una breve descripcion del producto',['class' => 'form-control']) !!}
	</div>
	<div class="">
		{!! Form::label('sku','SKU') !!}
		{!! Form::text('sku','Agrega SKU',['class' => 'form-control']) !!}
	</div>
	<div class="">
		{!! Form::label('caratula','Caratula') !!}
		{!! Form::file('caratula',['class' => 'form-control']) !!}
	</div>
	<div class="">
		{!! Form::label('descripcion','Descripcion Completa del Producto') !!}
		{!! Form::textarea('descripcion', 'Describe tu producto',['class' => 'form-control']) !!}
	</div>
	<div class="">
		<input type="submit" value='GUARDAR' class='btn btn-primary'>
	</div>
{!! Form::close() !!}