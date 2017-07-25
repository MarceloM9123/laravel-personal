<div class="container">
	<div class="row">
		<div id="blog" class="col-sm-8">

			<div class="center">
				<img class="img-responsive center" src="public/storage/{{ $post->img }}">
			</div>

			<h2><span>
			<a href="/blog/{{ $post->id }}">
			{{ $post->title }}
			</a>
			</span></h2>


			<h5><span>
			{{ $post->created_at->toFormattedDateString() }}
			</span></h5>

			
			{{-- <div id="blog" class="post-body"> --}}
				{{-- {!! $post->body !!} --}}
			{{-- </div> --}}

		</div>
	</div>
</div>