@extends('layouts.app')

@section('content')
		
		<div class="container">
			<div class="row">
				<div class="col-md-3 mt-5">
			<div class="card">
				<div class="card-header text-center bg-info">
					 POSTS
				</div>
				<div class="card-body text-center">
					<h1 class="text-center">{{ $post_count }}</h1>
				</div>
			</div>
		</div>

		<div class="col-md-3 mt-5">
			<div class="card">
				<div class="card-header text-center bg-danger">
					TRASHED POST
				</div>
				<div class="card-body text-center">
					<h1 class="text-center">{{ $trashed_count }}</h1>
				</div>
			</div>
		</div>

		<div class="col-md-3 mt-5">
			<div class="card">
				<div class="card-header text-center bg-success">
					USERS
				</div>
				<div class="card-body text-center">
					<h1 class="text-center">{{ $users_count }}</h1>
				</div>
			</div>
		</div>

		<div class="col-md-3 mt-5">
			<div class="card">
				<div class="card-header text-center bg-primary">
					CATEGORIES
				</div>
				<div class="card-body text-center">
					<h1 class="text-center">{{ $category_count }}</h1>
				</div>
			</div>
		</div>
			</div>
		</div>

@endsection
