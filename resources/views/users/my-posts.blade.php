@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="headline">
			<h3 class="title">My created posts ({{ Auth::user()->posts()->count() }})</h3>
		</div>
		<div class="row">
			<div class="col-md-8">
				<posts-component
						request-url="/api/user/posts"
						request-method="get">
				</posts-component>
			</div>
		</div>
	</div>
@endsection