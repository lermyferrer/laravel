@extends('layout')

@section('title', 'Editar Proyeto')

@section('content')

	<div class="container">

		<div class="row">

			<div class="col-12 col-sm-10 col-lg-6 mx-auto">

				@include('partials.validation-errors')

				<form class="bg-white py-3 px-3 shadow rounded" method="POST" action="{{ route('projects.update', $project) }}">
						
					@method('PATCH')

					<h1 class="display-5">@lang('Edit project')</h1>

					<hr>

					@include('projects._form')

					<button class="btn btn-primary btn-block">Actualizar</button>

					<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>

				</form>

			</div>

		</div>

	</div>

@endsection