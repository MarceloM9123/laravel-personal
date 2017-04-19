@extends('layout')

@section('content')
<div>


	<!-- <div id="page-header"  class="page-header">
		<div class="container">
  			<h1>Marcelo Mata <small>Coder</small></h1>
		</div>  			
	</div> -->


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
										<p>I am a web developer who enjoys learning new skills.  Understading what once seemed to be impossibly complex is what drives me.  I have a background in mathematics and like solving puzzles.  Transitioning to coding has been a challenge I wholeheartedly embraced.</p>
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
	<div class="container">
		<div class="row">

			<div id="tech" class="col-sm-6">
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
				<p><span>Every web developer has to learn to deploy a website.  I use the service Digitalocean to host my websites.  The Digitalocean community has excellent tutorials for instantiating a server.</span></p>
				</div>
		</div>

		<div class="panel panel-default">
				<div class="panel-heading">
				<h3 class="panel-title">Soft Skills</h3>
				</div>
				<div class="panel-body">
				<p><span>My strong work ethic and enthusiasm for learning new skills have come in very handy.  Programming has many languages and each with their own complexities.  I relish the feeling of uncertainty that learning a new language or framework brings.  Since I know it won't be long before I can look back and realize how far I have come in understanding such a complex subject.</span></p>
				</div>
		</div>

	</div>

</div>
@endsection

@section('footer')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<!-- Use downloaded version of Bootstrap -->
<script src="js/js/bootstrap.min.js"></script>
@endsection