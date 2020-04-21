@extends('layouts.app')


@section('content')
	<div class="card my-5">
		<div class="card-header">
			Trashed Post
		</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<th>Image</th>
					<th>Title</th>
					<th>RESTORE</th>
					<th>DELETE</th>
				</thead>
				<tbody>
					@if ($posts->count() > 0)
						@foreach ($posts as $post)
							<tr>
								<td>
									<img src="{{ $post->featured }}" width="50" height="50">
								</td>
								<td>
									{{ $post->title }}
								</td>
								<td>
									<a href="{{ route('post.restore', $post->id) }}" class="btn btn-success btn-sm">RESTORE</a>
								</td>
								<td>
									<a href="{{ route('post.kill', $post->id) }}" class="btn btn-danger btn-sm">DELETE</a>
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="5" class="text-center">No Trashed Post</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
		
@endsection