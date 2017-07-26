@extends('layout')

@section('content')
<div class="container">
  <div class="row">
	<nav id="nav" class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Marcelo Mata</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#profile">Profile <span class="sr-only">(current)</span></a></li>
	        <li><a href="#skills">Skills</a></li>
	        <li><a href="#blog">Blog</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <!-- Authentication Links -->
            @if (Auth::guest())
                <!-- <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li> -->
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  </div>
</div>


	<!-- profile -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="profile">
					<div class="intro">
						<div class="container">
							<div class="center">
								<h1>PROFILE</h1>
							</div>
						</div>

						<div class="container">
							<div class="row">

								<div class="col-sm-4">
									<div class="center">
										<h2><span>About</span></h2>
										<hr>
										<div class="padded-multiline">
											<p><span>I am a web developer who enjoys learning new skills.  Understading what once seemed to be impossibly complex is what drives me.  I have a background in mathematics and like solving problems.</span></p>
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="center">
										<img src="../images/me.png">
									</div>
								</div>

								<div class="col-sm-4">
									<div class="center">
										<h2><span>Details</span></h2>
										<hr>
										<div class="padded-multiline">
											<p>
												<span>Age: 25 <br/>
												Location: Brookfield, Illinois<br/>
												Email: marcelo@marcelomata.info</span>
											</p>
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- skills -->

	<div id="skills" class="container">
		<div class="row">
			<div class="container">
				<div class="col-md-12">
					<div class="center">
						<h1>SKILLS</h1>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div class="center">
					<h2><span>Languages</span></h2>
				</div>
			</div>
			<div class="container">
				<div class="col-sm-6">
					<div class="center">
						<p><span>HTML5, CSS3, Javascript, Python, PHP, SQL, JSON, JQuery</span></p>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-sm-6">
				<div class="center">
					<h2><span>Frameworks</span></h2>
				</div>
			</div>
			<div class="container">
				<div class="col-sm-6">
					<div class="center">
						<p><span>MVC, Laravel, Django, Angular, Bootstrap</span></p>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-sm-6">
				<div class="center">
					<h2><span>Tools</span></h2>
				</div>
			</div>
			<div class="container">
				<div class="col-sm-6">
					<div class="center">
						<p><span>Sublime Text 3, Github, Stack Overflow</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- blog -->
	<div id="blog" class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="center">
					<h1><a href="/">BLOG</a></h1>
				</div>
			</div>
		</div>


		<div class="row">
			@foreach ($posts as $post)
			<div class="col-sm-6 col-md-4">
				<div class="thumnail">
				  <div class="center">

					<a href="/blog/{{ $post->id }}"><img src="/storage/thumb-{{ $post->img }}"></a>

					<div class="caption">
						<h2><span>
						<a href="/blog/{{ $post->id }}">
						{{ $post->title }}
						</a>
						</span></h2>


						<h5><span>
						{{ $post->created_at->toFormattedDateString() }}
						</span></h5>

					</div>
				  </div>
				</div>
			</div>
			@endforeach
		</div>

	</div>





@endsection

@section('footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Use downloaded version of Bootstrap -->
<script src="js/js/bootstrap.min.js"></script>
@endsection