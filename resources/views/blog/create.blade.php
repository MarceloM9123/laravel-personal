@extends('layout')

@section('content')

<div class="container">
	<div class="row">
		<div id="blog-header" class="page-header">
			<h1>Marcelo Mata<small>coder</small></h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div id="create">
				<h2><span>Publish a Post</span></h2>
			</div>

			<form method="POST" action="/blog">

			  {{ csrf_field() }}

			  <div id="create" class="form-group">
			    <label for="title"><h2><span>Title</span></h2></label>
			    <input type="text" class="form-control" id="title" name="title">
			  </div>

			  <div id="create" class="form-group">
			    <label for="body"><h2><span>Body</span></h2></label>
			    <textarea id="body" class="form-control" name="body"></textarea>
			  </div>
			  
			  <button type="submit" class="btn btn-danger">Submit</button>
			
			</form>
			
			<div id="create" class="alert alert-error">
				
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