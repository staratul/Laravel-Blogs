@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')

	<div class="card my-5">
		<div class="card-header">
			Update Posts: {{ $post->title }}
		</div>
		<div class="card-body">
			<form action="{{ route('post.update', $post->id) }}" method="post" 
				enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" id="title" class="form-control" 
						value="{{ $post->title }}">
				</div>
				<div class="form-group">
					<label for="category">Select Category</label>
					<select class="form-control" name="category_id" id="category">
						@foreach ($categories as $category)
							<option value="{{ $category->id }}"
								@if($post->category_id == $category->id)
									selected 
								@endif
								>
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
								<input type="checkbox" name="tags[]" value="{{ $tag->id }}"
									@foreach($post->tags as $t)
										@if($tag->id == $t->id)
											checked 
										@endif
									@endforeach
								>
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
					<input id="content" type="hidden" name="content" value="{{ $post->content }}">
  					<trix-editor input="content"></trix-editor>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success rounded-0 float-right">Update Posts</button>
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