@extends('layouts.app')


@section('content')
	
	@include('admin.includes.errors')

	<div class="card my-5">
		<div class="card-header">
			Update Category: {{ $category->name }}
		</div>
		<div class="card-body">
			<form action="{{ route('category.update', $category->id) }}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" class="form-control" 
						value="{{ $category->name }}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success rounded-0 float-right">Update Category</button>
				</div>
			</form>
		</div>
	</div>
@endsection