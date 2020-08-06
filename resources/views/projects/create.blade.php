@extends('layout')

@section('title', 'Crear Proyeto')

@section('content')

	<div class="container">

		<div class="row">

			<div class="col-12 col-sm-10 col-lg-6 mx-auto">

				@include('partials.validation-errors')

				<form class="bg-white py-3 px-3 shadow rounded" 
					method="POST" 
					enctype="multipart/form-data" 
					action="{{ route('projects.store') }}"
				>
				
					<h1 class="display-5">@lang('New project')</h1>

					<hr>

					@include('projects._form')
					
					<button class="btn btn-primary btn-block">Crear</button>

				</form>
	
			</div>

		</div>

	</div>

@endsection