<?php
session_start();
?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8"/>
			<title>Change of Mind: Alpha Test</title>
			<meta http-equiv="X-UA-Compatible" content="IE=Edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="css/style.css">
			<link href="http://d2v52k3cl9vedd.cloudfront.net/basscss/6.0.0/basscss.min.css" rel="stylesheet">
			<link href="css/basscss.css" rel="stylesheet">
			<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
			<meta name="Change of Mind" content="change,of,mind,chat,anonymous,messaging,app">
			<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900|Merriweather:400,300,700' rel='stylesheet' type='text/css'>


<!-- 			<script type="text/javascript">
			
			function hideShow2() {
				document.getElementById("selfie").style.visibility="visible";
			}

			function hideShow() {
				document.getElementById("inputForm").style.display="none";
			}


			function check1() {
			var Checker = document.getElementById("username");

			if (!(Checker.innerHTML=="")) {
				document.getElementById("selfie").style.display="block";

			}}

				

			</script> -->
<!-- 
			<style>

			#inputForm {
				display: block;
			}

			#selfie {
				visibility: hidden;
			}

			</style> -->
		</head>

		<body>

	<?php
		// This echos if the session is on/off

		 //  if (!isset($_SESSION)) {
		 // 	 echo "The session was not already set</br>";
			// $_SESSION['username'] =$_POST['username'];	
		 // } else {
		 //  echo "The session was already set</br>";
		 //  } 


		session_unset();

		$_SESSION['username'] =$_POST['username'];
		 // echo $_SESSION['username'];
			
		
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
			    	<form class="center" action="<?php echo $_POST['username'] . ".php";?>" method="POST" id="inputForm">
			    	<!-- #the action field tells the form to be processed on this page -->
			    	<!-- http://stackoverflow.com/questions/4783381/same-page-processing -->
			    		<fieldset class="fieldset-reset bbox">
							<legend class="mb2">Try it now:</legend>
								<ul class="list-reset">
									<li>
								    	<label for="username" class="left">Username</label>
								    	<input id="username" class="block full-width field-light my2" type="text" name="username" required value="<?php echo $_POST['username'];?>">
									</li>

									<label for="emotions" class="">I'm feeling...
									<li class="full-width" name="emotions">
										<input class="p2" type="checkbox" name="Emotion1" value="Stressed">Stressed
										<input class="p2" type="checkbox" name="Emotion2" value="Frustrated">Frustrated    
										<input class="p2" type="checkbox" name="Emotion3" value="Annoyed">Annoyed
										<br>
										<input class="p2" type="checkbox" name="Emotion4" value="Jealous">Jealous
										<input class="p2" type="checkbox" name="Emotion5" value="Lonely">Lonely
										<input class="p2" type="checkbox" name="Emotion6" value="Worried">Worried
										
									</li>
									
									<label for="because" class="">...becuase of...</label>
									<li class="full-width" name="because">
										<input class="p2" type="checkbox" name="because1" value="Homesickness">Homesickness
										<input class="p2" type="checkbox" name="because2" value="Academics">Academics
										<input class="p2" type="checkbox" name="because3" value="Relationships">Relationships
										<br>
										<input class="p2" type="checkbox" name="because4" value="Friendships">Friendships
										<input class="p2" type="checkbox" name="because5" value="Work">Work
										<input class="p2" type="checkbox" name="because6" value="Something crappy that happened">Something crappy happened	
									</li>
									
									<li>
										<label for="describe" class="left">Jot down a little about what you want to talk about.</label>
										<textarea class="full-width field-light p2" type="text" name="describe" id="describe" placeholder="I dropped my apple, which was my only breakfast.."></textarea>
									</li>

								    <li class="full-width">
								    	<label for="email" class="left">(Optional) Email Address</label>
								    	<input id="email" class="block full-width field-light" type="email" name="email" value="" placeholder="For if you want to be added to out email list.">
									</li>

									
								</ul>
								<button class="button center" type="submit" onclick="Makefile()">Submit</button>
						</fieldset>
					</form>	
				</div>
				<hr>
			</section>


			<!-- This creates a new file based on the username the user input on the landingpage -->

			<?php
							// save html file
					
						$targetFile = $_POST['username'] . ".php";
						// $File2Copy = fopen("template.php", "r");

						copy('template.php', $targetFile);
							// function saveFile() {
							// 	copy("profile_stock.php", $filename2);
			?>


			<!-- This is a test to see if the new file was created -->
<!-- 			<section class="clearfix">
				<div class="col-2 left">
					<?php
							

					if (file_exists($_POST['username'] . ".php")) {
			    		echo "Success : New profile has been made";
						} else {
						    echo "Failure: $targetCopy does not exist";
							}
		
					?>
				</div>
			</section> -->

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