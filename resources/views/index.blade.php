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
	        <li><a href="#tech">Tech</a></li>
	        <li><a href="#skills">Skills</a></li>
	        <!-- dropdown -->
	        <!-- <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li>
	          </ul>
	        </li> -->
	      </ul>
	      <!-- search -->
	      <!-- <form class="navbar-form navbar-left">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form> -->
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="/blog">Blog</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  </div>
</div>



	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="profile">
					<div class="intro">

						<div class="center">
							<h1><span>Profile</span></h1>
							<hr>
						</div>


						<div class="container">
							<div class="row">


								<div class="col-sm-4">
									<div class="center">
										<h2><span>About</span></h2>
										<hr>
										<p>I am a web developer who enjoys learning new skills.  Understading what once seemed to be impossibly complex is what drives me.  I have a background in mathematics and like solving puzzles.</p>
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
										<p>Age: 25 <br/>
										Location: Brookfield, Illinois<br/>
										Email: marcelomata91@gmail.com</p>
									</div>
								</div>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <carousel> -->
	<div id="tech" class="container">
		<div class="row">

			<div class="col-sm-6">
					<h1><span>Web Dev Tools & Frameworks I'm currently using :</span></h1>
			</div>

			<div class="col-xs-9 col-sm-6">

				<div id="my-slide" class="carousel slide" data-ride="carousel">

					<div class="carousel-inner" role="listbox">

						<div  class="item active">
							<img src="../images/laravel5.png" alt=""/>
						</div>

						<div  class="item">
							<img src="../images/django-logo.png" alt=""/>
						</div>

						<div  class="item">
							<img src="../images/pycharmlogo.png" alt=""/>
						</div>

						<div  class="item">
							<img src="../images/subl3.jpg" alt=""/>
						</div>

					</div>

					<a class="left carousel-control" href="#my-slide" role="button" data-slide="prev">
    					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="right carousel-control" href="#my-slide" role="button" data-slide="next">
    					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
  					<a class="right carousel-control" href="#my-slide" role="button" data-slide="next">
    					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>

				</div>
			</div>
		</div>
	</div>
	<!-- </div> -->

	<!-- skills -->

	<div id="skills" class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="center">
					<h1><span>Skills</span></h1>
					<hr>
				</div>
			</div>
		</div>

		<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title">Django & Laravel</h3>
				</div>
				<div class="panel-body">
				<p><span>Web frameworks introduced me to web development.  All the built in tools drastically reduce development time.  After having made a few websites with these framework I am very confident in my ability to build web applications.</span></p>
				</div>
		</div>

		<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title">Front-end</h3>
				</div>
				<div class="panel-body">
				<p><span>HTML, CSS, and the bootstrap framework are excellent tools make it less difficult to develop responsive web applications.  These tools are essential to the modern web developer.</span></p>
				</div>
		</div>

		<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title">Server Side</h3>
				</div>
				<div class="panel-body">
				<p><span>Python is the first language I have learned followed by PHP.  Each language has great frameworks and strong communities behind them.</span></p>
				</div>
		</div>

		<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title">Full Stack</h3>
				</div>
				<div class="panel-body">
				<p><span>Every web developer has to learn to deploy a website.  I use the service Digitalocean to host my websites.  The Digitalocean community has excellent guides for instantiating a server.</span></p>
				</div>
		</div>

		<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title">Soft Skills</h3>
				</div>
				<div class="panel-body">
				<p><span>My strong work ethic and enthusiasm for learning new skills have come in very handy.  Programming has many languages and each with their own complexities.  I value and relish the feeling of uncertainty that learning a new skill brings.  Since I know it won't be long before I can look back and realize how far I have come in understanding such a complex subject.</span></p>
				</div>
		</div>

	</div>

@endsection

@section('footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Use downloaded version of Bootstrap -->
<script src="js/js/bootstrap.min.js"></script>
@endsection