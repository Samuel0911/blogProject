@extends('admin.template.main')

@section('title', 'Listado de articulos')

@section('content')
	<a href="{{ route('admin.articles.create') }}" class="btn btn-info">Registrar nuevo articulo</a>
	<!-- Buscador de Articulos -->
		{!! Form::open(['route' => 'admin.articles.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
		<div class="input-group">
			{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Buscar articulo', 'aria-describedby' => 'search']) !!}
			<span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true" ></span> </span>
			
		</div>
		{!! Form::close() !!}
<!-- fin del Buscador de Articulos -->
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Titulo</th>
			<th>Categorias</th>
			<th>Usuario</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($articles as $article)
				<tr>
					<td>{{ $article->id }} </td>
					<td>{{ $article->title }}</td>
					<td>{{ $article->category->name }}</td>
					<td>{{ $article->user->name }}</td>
					<td>
						<a href="{{ route('admin.articles.edit', $article->id) }}" class="btn btn-warning"><span class=" glyphicon glyphicon-wrench" aria-hidden="true" >&nbsp</span>Editar</a>
						
						<a href="{{ route('admin.articles.destroy', $article->id) }}" onclick="return confirm('Seguro que desea eliminar al usuario? ')" class="btn btn-danger"><span class=" glyphicon glyphicon-remove-circle" aria-hidden="true" >&nbsp</span>Eliminar</a> 
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="text-center">
		{!! $articles->render() !!}
	</div>
@endsection