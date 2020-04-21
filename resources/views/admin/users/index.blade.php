@extends('layouts.app')


@section('content')
	<div class="card my-5">
		<div class="card-header">
			Users
		</div>
		<div class="card-body">
			<table class="table table-hover">
				<thead>
					<th>Image</th>
					<th>Name</th>
					<th>Permissions</th>
					<th>Delete</th>
				</thead>
				<tbody>
					@if ($users->count() > 0)
						@foreach ($users as $user)
							<tr>
								<td>
									<img src="/{{ $user->profile->avatar }}" width="50" height="50" alt="users" style="border-radius: 50%">
								</td>
								<td>
									{{ $user->name }}
								</td>
								<td>
									@if($user->admin)
										<a href="{{ route('user.not.admin', $user->id) }}" class="btn btn-sm btn-danger">Remove Admin</a>
									@else
										<a href="{{ route('user.admin', $user->id) }}" class="btn btn-sm btn-success">Make Admin</a>
									@endif
								</td>
								<td>
									@if(Auth::id() !== $user->id)
										<a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger btn-sm">DELETE</a>
									@endif
								</td>
							</tr>
						@endforeach
					@else
						<tr>
							<td colspan="5" class="text-center">No User Yet</td>
						</tr>
					@endif
				</tbody>
			</table>
		</div>
	</div>
		
@endsection