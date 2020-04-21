@extends('layouts.app')


@section('content')

	@include('admin.includes.errors')
	
	<div class="card my-5">
		<div class="card-header">
			Edit Blog Setting
		</div>
		<div class="card-body">
			<form action="{{ route('settings.update') }}" method="post">
				@csrf
				<div class="form-group">
					<label for="name">Site Name</label>
					<input type="text" name="site_name" id="name" value="{{ $settings->site_name }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="email">Contact Email</label>
					<input type="text" name="contact_email" id="email" value="{{ $settings->contact_email }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="number">Contact Number</label>
					<input type="text" name="contact_number" id="number" value="{{ $settings->contact_number }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" name="address" id="address" value="{{ $settings->address }}" class="form-control">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success rounded-0 float-right">Update Site Settings</button>
				</div>
			</form>
		</div>
	</div>
@endsection