@extends('layouts.app')


@section('content')
	<div class="card my-5">
		<div class="card-header">
			Cateogries
		</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<th>Category Name</th>
					<th>Editing</th>
					<th>Deleting</th>
				</thead>
				<tbody>
					@if ($categories->count() > 0)
						@foreach ($categories as $category)
							<tr>
								<td>
									{{ $category->name }}
								</td>
								<td>
									<a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm">EDIT</a>
								</td>
								<td>
									<a href="{{ route('category.delete', $category->id) }}" class="btn btn-danger btn-sm">DELETE</a>
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="5" class="text-center">No Categories Yet</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
		
@endsection