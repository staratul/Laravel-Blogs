@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="card my-5">
		<div class="card-header">
			Create a New Posts
		</div>
		<div class="card-body">
			<form action="{{ route('post.store') }}" method="post" 
				enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" id="title" class="form-control">
				</div>
				<div class="form-group">
					<label for="category">Select Category</label>
					<select class="form-control" name="category_id" id="category">
						@foreach ($categories as $category)
							<option value="{{ $category->id }}">
								{{ $category->name }}
							</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Select Tags</label>
					@foreach ($tags as $tag)
						<div class="custom-checkbox">
							<label>
								<input type="checkbox" name="tags[]" value="{{ $tag->id }}">
								{{ $tag->tag }}
							</label>
						</div>
					@endforeach
				</div>
				<div class="form-group">
					<label for="featured">Featured Image</label>
					<input type="file" name="featured" id="featured" 
						class="form-control-file">
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<input id="content" type="hidden" name="content" value="">
  					<trix-editor input="content"></trix-editor>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success rounded-0 float-right">Add Posts</button>
				</div>
			</form>
		</div>
	</div>
@endsection



@section('css')
	<link href="{{ asset('css/trix.css') }}" rel="stylesheet">
@endsection



@section('js')
	<script src="{{ asset('js/trix.js') }}"></script>
@endsection









