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
			<link rel="stylesheet" href="css/style.css">
			<link href="http://d2v52k3cl9vedd.cloudfront.net/basscss/6.0.0/basscss.min.css" rel="stylesheet">
			<link href="css/basscss.css" rel="stylesheet">
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
				<div class="sm-col-10 md-col-8 lg-col-6 mx-auto center">

					<div class="mt4 mb1">
						<img class="logo" src="images/changelogo.png">
					</div>

			 		<h1 class="md-hide h4 white lato wider bold center">CHANGE OF MIND</h1>
			 		<h1 class="md-show h2 white lato wider bold center">CHANGE OF MIND</h1>



					<div class="mt4">
						<p class="md-hide h2 lato white">Easing the tension.</p>
						<p class="md-show h1 lato white">Easing the tension.</p>
						<p class="md-hide h5 px2 white lato transparent">Chat anonymously about your stress, or buddy up and practice mindfulness!</p>
						<p class="md-show h3 px2 white lato transparent">Chat anonymously about your stress, or buddy up and practice mindfulness!</p>
					</div>

					<div class="center mt4">
						<p class="clearfix h4 lato white transparent">Learn more</p>
						<div class="center mb2">
							<img class="smallicon" src="images/down_arrow.png">
						</div>

					</div>
				</div>

			</header>


			<section class="container half-width mt3">
					
			    <div class="center">					

					<h2 class="center">Mental Selfie</h2>
						<label for="username">Username:</label>
						<p class="h3 ml2" id="username"><?php
							echo $_SESSION['username'];?></p> 

<!-- 						<label for="emotionList">Emotions:</label>
						<ul class="h3 list-reset" id="emotionList">
							<li class="ml2"> <?php
								if (isset($_SESSION['Emotion1'])) {
									echo $_SESSION['Emotion1'];
								} ?></li>
							<li class="ml2"> <?php
								if (isset($_SESSION['Emotion2'])) {
									echo $_SESSION['Emotion2'];
								} ?></li>
							<li class="ml2"> <?php
								if (isset($_SESSION['Emotion3'])) {
									echo $_SESSION['Emotion3'];
								} ?></li>
							<li class=\"ml2\"><?php
								if (isset($_SESSION['Emotion4'])) {
									echo $_SESSION['Emotion4'];
								} ?></li>
						</ul> -->

						<p class="h3">I'm feeling <span class="bold"><?php

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
							?></span>because of <span class="bold"><?php

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


						<label for="blurb">A little about what happened...:</label>
						<p id="blurb" class="h3 ml2"><?php
								if (isset($_SESSION['describe'])) {
									echo $_SESSION['describe'];
								} ?></p>
									
									
				</div>

			</section>
				<hr>
			<!-- Sean:: Added tlk.io -->
			<section class="clearfix mx-auto">	
			    <div class="sm-col-12 md-col-10 lg-col-8 center">					

					<div class="half-width" id="tlkio" data-channel="changeofmind" style="width:100%;height:400px;">
					</div>
				</div>
			</section>


			<!--_____footer_____-->


			<footer class="footer clearfix off-gray px3 py3">

					<div class="col">
					  <p class="lato blue px2 h5 py2 mb0">&copy; 2015 CHANGE OF MIND</p>
					</div>

					<div class="col-right">
					  <a href="/" class="lato button py2 button-transparent">About us</a>
					  <a href="/" class="lato button py2 button-transparent">Blog</a>
					  <a href="/" class="lato button py2 button-transparent">Twitter</a>
					</div>


			</footer>



				</body>
			</html>
