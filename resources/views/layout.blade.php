<!DOCTYPE html>
<html lang="eng">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>Marcelo Mata</title>


  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <link rel="stylesheet" href="/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">

  <style>
  	img.bg {
			/* Set rules to fill background */
			min-height: 100%;
			min-width: 1415px;
			
			/* Set up proportionate scaling */
			width: 100%;
			height: auto;
			
			/* Set up positioning */
			position: fixed;
			top: 0;
			left: 0;
		}
		
		@media screen and (max-width: 1415px){
			img.bg {
				left: 50%;
				margin-left: -708px; }
		}
  </style>


</head>
<body data-spy="scroll" data-target="#nav" class='full'>

	<img src="../images/21macEdit.jpg" class="bg">

	@yield('content')

@yield('footer')

</body>
</html>