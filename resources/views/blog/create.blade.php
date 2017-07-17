@extends('blog.layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-8">

			<div id="create" class="header">
				<h2 class="header"><span>Publish a Post</span></h2>
			</div>

			<form method="POST" action="/blog" enctype="multipart/form-data">

			  {{ csrf_field() }}

			  <div id="create" class="form-group" enctype="multipart/form-data">
			    <label for="title"><h2><span>Title*</span></h2></label>
			    <input type="text" class="form-control" id="title" name="title">
			  </div>

			  <div id="create" class="form-group">
			    <label for="body"><h2><span>Body*</span></h2></label>
			    <textarea id="body" class="form-control" name="body"></textarea>
			  </div>

			  <div id="create" class="form-group">
			    <label for="img"><h2><span>Image*</span></h2></label>
			    <input type="file" name="img" id="img" class="form-control">
			  </div>
			  
			  <div id="create" class="form-group">
				<p>* required</p>			  	
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
<script>
// tinymce.init({
// 	  selector: 'textarea',
// 	  height: 500,
// 	  menubar: false,
// 	  plugins: [
// 	    'advlist autolink lists link image charmap print preview anchor',
// 	    'searchreplace visualblocks code fullscreen',
// 	    'insertdatetime media table contextmenu paste code'
// 	  ],
// 		toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
// 		content_css: [
// 	    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
// 	    '//www.tinymce.com/css/codepen.min.css']
// });
</script>

@endsection