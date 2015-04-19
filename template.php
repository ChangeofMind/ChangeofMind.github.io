<?php
session_start();
?>
<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<title>Change of Mind: Empathy Chat</title>
			<meta http-equiv="X-UA-Compatible" content="IE=Edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link href="http://d2v52k3cl9vedd.cloudfront.net/basscss/6.0.0/basscss.min.css" rel="stylesheet">
			<link href="css/basscss.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="css/style.css" type="text/css">
			<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
			<meta name="Change of Mind" content="change,of,mind,chat,anonymous,messaging,app">
			<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900|Merriweather:400,300,700' rel='stylesheet' type='text/css'>
			<script async src="http://tlk.io/embed.js" type="text/javascript"></script>
		</head>

		<body>

		<?php

		if (isset($_POST['username'])) {
    		$_SESSION['username'] =$_POST['username'];
			}

		if (isset($_POST['describe'])) {
    		$_SESSION['describe'] =$_POST['describe'];
			}

		if (isset($_POST['Emotion1'])) {
    		$_SESSION['Emotion1'] =$_POST['Emotion1'];
			}

		if (isset($_POST['Emotion2'])) {
    		$_SESSION['Emotion2'] =$_POST['Emotion2'];
			}

		if (isset($_POST['Emotion3'])) {
    		$_SESSION['Emotion3'] =$_POST['Emotion3'];
			}

		if (isset($_POST['Emotion4'])) {
    		$_SESSION['Emotion4'] =$_POST['Emotion4'];
			}

		if (isset($_POST['Emotion5'])) {
    		$_SESSION['Emotion5'] =$_POST['Emotion5'];
			}

		if (isset($_POST['Emotion6'])) {
    		$_SESSION['Emotion6'] =$_POST['Emotion6'];
			}

		if (isset($_POST['because1'])) {
    		$_SESSION['because1'] =$_POST['because1'];
			}

		if (isset($_POST['because2'])) {
    		$_SESSION['because2'] =$_POST['because2'];
			}

		if (isset($_POST['because3'])) {
    		$_SESSION['because3'] =$_POST['because3'];
			}

		if (isset($_POST['because3'])) {
    		$_SESSION['because3'] =$_POST['because3'];
			}

		if (isset($_POST['because4'])) {
    		$_SESSION['because4'] =$_POST['because4'];
			}

		if (isset($_POST['because5'])) {
    		$_SESSION['because5'] =$_POST['because5'];
			}

		if (isset($_POST['because6'])) {
    		$_SESSION['because6'] =$_POST['because6'];
			}




		// $_SESSION['describe'] =$_POST['describe'];
		// $_SESSION['Emotion1'] =$_POST['Emotion1'];
		// $_SESSION['Emotion2'] =$_POST['Emotion2'];
		// $_SESSION['Emotion3'] =$_POST['Emotion3'];
		// $_SESSION['Emotion4'] =$_POST['Emotion4'];


		?>

			
	<header class="clearfix header color">
		<div class="sm-col-10 md-col-8 lg-col-6 mx-auto center m3">

			<div class="mt3 mb1">
				<a class="white lato wider bold" href="changeofmind.io"><img class="logo" src="images/changelogo.png"></a>
				<h1 class="h3 md-hide white lato wider bold center">CHANGE OF MIND</h1>
 				<h1 class="h1 md-show white lato wider bold center">CHANGE OF MIND</h1>
			</div>


			<div class="mt4">
				<p class="md-hide h3 lato white">Seek Support, Show Support</p>
				<p class="md-show h1 lato white">Seek Support, Show Support.</p>
				<p class="md-hide h5 px2 white lato transparent">Find the support you need, when you need it.</p>
				<p class="md-show h3 px2 white lato transparent">Find the support you need, when you need it.</p>
			</div>

			<div class="center mt4">
				<p class="clearfix h4 lato white transparent">Learn more</p>
				<div class="center mb2">
					<img class="smallicon" src="images/down_arrow.png">
				</div>

			</div>
		</div>

	</header>

			<section class="clearfix mt3 off-gray">
					
			    <div class="sm-col-10 md-col-8 lg-col-4 mx-auto">
			    	 <div class="sm-col-12">					

					<h2 class="center dk-grey pb4">Mental Selfie</h2>
						<p class="h3 ml2 aquateal center" id="username"><?php
							echo $_SESSION['username'];?></p> 


						<p class="h3 dk-grey">I'm feeling <span class="bold aquateal"><?php

							if (isset($_SESSION['Emotion1'])) {
									echo $_SESSION['Emotion1'] . " ";
								}

							if (isset($_SESSION['Emotion2'])) {
									echo $_SESSION['Emotion2'] . " ";
								}

							if (isset($_SESSION['Emotion3'])) {
									echo $_SESSION['Emotion3'] . " ";
								}

							if (isset($_SESSION['Emotion4'])) {
									echo $_SESSION['Emotion4'] . " ";
								}

							if (isset($_SESSION['Emotion5'])) {
									echo $_SESSION['Emotion5'] . " ";
								}

							if (isset($_SESSION['Emotion6'])) {
									echo $_SESSION['Emotion6'];
								}
							?></span> because of <span class="bold aquateal"><?php

							if (isset($_SESSION['because1'])) {
									echo $_SESSION['because1'] . " ";
								}

							if (isset($_SESSION['becuase2'])) {
									echo $_SESSION['because2'] . " ";
								}

							if (isset($_SESSION['because3'])) {
									echo $_SESSION['because3'] . " ";
								}

							if (isset($_SESSION['because4'])) {
									echo $_SESSION['because4'] . " ";
								}

							if (isset($_SESSION['because5'])) {
									echo $_SESSION['because5'] . " ";
								}

							if (isset($_SESSION['because6'])) {
									echo $_SESSION['because6'];
								}
								?></span></p>


						<label for="blurb" class="center">What happened is that...</label>
						<p id="blurb" class="h3 aquateal"><?php
								if (isset($_SESSION['describe'])) {
									echo $_SESSION['describe'];
								} ?></p>
									
					</div>			
				</div>

			</section>
				<hr>
			<!-- Sean:: Added tlk.io -->
			<section class="clearfix mx-auto">	
			    <div class="sm-col-10 md-col-8 lg-col-4 center" id="tlkio" data-channel="changeofmind" style="width:100%;height:400px;">					

					<!-- <div class="half-width" id="tlkio" data-channel="changeofmind" style="width:100%;height:400px;">
					</div> -->
				</div>
			</section>


			<!--_____footer_____-->


		<footer class="footer clearfix off-gray px3">

			<div class="col">
			  <p class="lato blue px2 h5 py2 mb0">&copy; 2015 CHANGE OF MIND</p>
			</div>

			<div class="md-hide col">
<!-- 			 <a href="/" class="lato button py2 button-transparent">About us</a>
			  <a href="/" class="lato button py2 button-transparent">Blog</a> -->
			  <a href="/" class="lato button py2 button-transparent blue">Twitter</a>
			</div>

			<div class="md-show col-right">
<!-- 			 <a href="/" class="lato button py2 button-transparent">About us</a>
			  <a href="/" class="lato button py2 button-transparent">Blog</a> -->
			  <a href="/" class="lato button py2 button-transparent blue">Twitter</a>
			</div>


		</footer>


				</body>
			</html>
