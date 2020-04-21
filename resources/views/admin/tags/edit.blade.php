@extends('layouts.app')


@section('content')
	
	@include('admin.includes.errors')

	<div class="card my-5">
		<div class="card-header">
			Update Tag: {{ $tag->tag }}
		</div>
		<div class="card-body">
			<form action="{{ route('tag.update', $tag->id) }}" method="post">
				@csrf
				<div class="form-group">
					<label for="tag">Tag</label>
					<input type="text" name="tag" id="tag" class="form-control" 
						value="{{ $tag->tag }}">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success rounded-0 float-right">Update Tag</button>
				</div>
			</form>
		</div>
	</div>
@endsection