@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')
	
	<div class="card my-5">
		<div class="card-header">
			Create a New Category
		</div>
		<div class="card-body">
			<form action="{{ route('category.store') }}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success rounded-0 float-right">Add Category</button>
				</div>
			</form>
		</div>
	</div>
@endsection