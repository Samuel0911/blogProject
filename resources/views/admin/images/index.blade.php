@extends('admin.template.main')

@section('title', 'Listado de imagenes')

@section('content')

	<div class="row">
		@foreach($images as $image)
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="image/articles/{{ $image->name }}" alt="Imagen no encontrada" class="img-responsive">
						<!--<img src="image/articles/{{ $image->name }}" alt="" style="width:100px;"/>
						-->
					</div>
					<div class="panel-footer">

					</div>
				</div>
			</div>

		@endforeach
	</div>

@endsection
