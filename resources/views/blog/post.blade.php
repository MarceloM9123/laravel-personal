<div class="container">
	<div class="row">
		<div id="blog" class="col-sm-8">

			<h2><span>
			<a href="/blog/{{ $post->id }}">
			{{ $post->title }}
			</a>
			</span></h2>


			<h5><span>
			{{ $post->created_at->toFormattedDateString() }}
			</span></h5>

			<p><span>{{ $post->body }}</span></p>

		</div>
	</div>
</div>