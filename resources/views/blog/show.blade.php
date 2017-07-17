@extends('blog.layout')

@section('content')

	<div class="container">
		<div class="row">
			<div id="blog" class="col-sm-8">
				
				<div class="center">
					<img class="img-responsive" src="/storage/{{ $post->img }}">
				</div>

				<h2><span>{{ $post->title }}</span></h2>

				<div id="blog" class="post-body">{!! $post->body !!}</div>

			</div>
		</div>
	</div>

@endsection