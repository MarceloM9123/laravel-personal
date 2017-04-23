@extends('blog.layout')

@section('content')

	<div class="container">
		<div class="row">
			<div id="blog" class="col-sm-8">
				<h2><span>{{ $post->title }}</span></h2>

				<p><span>{{ $post->body }}</span></p>

			</div>
		</div>
	</div>

@endsection