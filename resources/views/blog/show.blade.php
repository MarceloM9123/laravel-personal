@extends('blog.layout')

@section('content')

	<div class="container">
		<div class="row">
			<div id="blog" class="col-sm-12">
				
				<div class="center">
					<img class="img-responsive" src="/storage/{{ $post->img }}">
				</div>

				<h2><span>{{ $post->title }}</span></h2>

				<p><span>{!! nl2br(e($post->body)) !!}</span></p>

			</div>
		</div>
	</div>

@endsection