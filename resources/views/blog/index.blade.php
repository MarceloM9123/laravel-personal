@extends('blog.layout')

@section('content')


<div>
	@foreach ($posts as $post)

		@include('blog.post')

	@endforeach
</div>


@endsection