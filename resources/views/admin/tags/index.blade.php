@extends('layouts.app')


@section('content')
	<div class="card my-5">
		<div class="card-header">
			Tags
		</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<th>Tags Name</th>
					<th>Editing</th>
					<th>Deleting</th>
				</thead>
				<tbody>
					@if ($tags->count() > 0)
						@foreach ($tags as $tag)
							<tr>
								<td>
									{{ $tag->tag }}
								</td>
								<td>
									<a href="{{ route('tag.edit', $tag->id) }}" class="btn btn-primary btn-sm">EDIT</a>
								</td>
								<td>
									<a href="{{ route('tag.destroy', $tag->id) }}" class="btn btn-danger btn-sm">DELETE</a>
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="5" class="text-center">No Tags Yet</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
		
@endsection