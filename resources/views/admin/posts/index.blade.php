@extends('layouts.app')


@section('content')
	<div class="card my-5">
		<div class="card-header">
			Published Post
		</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<th>Image</th>
					<th>Title</th>
					<th>EDIT</th>
					<th>TRASHED</th>
				</thead>
				<tbody>
					@if ($posts->count() > 0)
						@foreach ($posts as $post)
							<tr>
								<td>
									<img src="{{ $post->featured }}" width="80" height="50">
								</td>
								<td>
									{{ $post->title }}
								</td>
								<td>
									<a href="{{ route('post.edit', $post->id) }}" class="btn btn-primary btn-sm">EDIT</a>
								</td>
								<td>
									<a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger btn-sm">TRASH</a>
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="5" class="text-center">No Post Yet</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
		
@endsection