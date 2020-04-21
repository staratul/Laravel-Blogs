@extends('layouts.app')
@section('content')

	@include('admin.includes.errors')
	
	<div class="card my-5">
		<div class="card-header">
			User Profile
		</div>
		<div class="card-body">
			<form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control">
				</div>
				<div class="form-group">
					<label for="avatar">Upload New Avatar</label>
					<input type="file" name="avatar" id="avatar">
				</div>
				<div class="form-group">
					<label for="facebook">Facebook</label>
					<input type="text" name="facebook" id="facebook" value="{{ $user->profile->facebook }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="youtube">Youtube</label>
					<input type="text" name="youtube" id="youtube" value="{{ $user->profile->youtube }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="about">about</label>
					<textarea name="about" id="about" class="form-control">{{ $user->profile->about }}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success rounded-0 float-right">Update Profile</button>
				</div>
			</form>
		</div>
	</div>
@endsection