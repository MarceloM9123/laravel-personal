<div class="container">
	<div class="row">
		<div id="blog" class="col-sm-12">

			<div class="center">
				<img class="img-responsive center" src="storage/{{ $post->img }}">
			</div>

			<h2><span>
			<a href="/blog/{{ $post->id }}">
			{{ $post->title }}
			</a>
			</span></h2>


			<h5><span>
			{{ $post->created_at->toFormattedDateString() }}
			</span></h5>

			<p><span>{!! nl2br(e($post->body)) !!}</span></p>

		</div>
	</div>
</div>