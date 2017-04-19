@extends('layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div id="create">
				<h2><span>Edit Post: "{{ $post->title}}"</span></h2>
			</div>
			
			<form method="POST" action="/blog/{{ $post->id }}">

				<input type="hidden" name="_method" value="PATCH">

				{{ csrf_field() }}

				<div id="create" class="form-group">
				    <label for="title"><h2><span>Title</span></h2></label>
				    <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" />
				</div>

				<div id="create" class="form-group">
				    <label for="body"><h2><span>Body</span></h2></label>
				    <textarea id="body" class="form-control" name="body">{{ $post->body }}</textarea>
				</div>
				  
				<button type="submit" class="btn btn-danger">Submit</button>
				
			</form>
			
			<div id="create">
				<form method="POST" action="/blog/{{ $post->id }}">
					<input type="hidden" name="_method" value="DELETE">
					{{ csrf_field() }}
					<button type="submit" class="btn btn-danger">Delete</button>
				</form>
			</div>
			
			<div class="alert alert-error">
				
				<ul>
					@foreach ($errors->all() as $error)
						<li><span>{{ $error }}</span></li>
					@endforeach
				</ul>
			</div>



		</div>
	</div>
</div>


@endsection