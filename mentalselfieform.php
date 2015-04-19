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
			

			<section class="clearfix mt3">
				
			    <div class="sm-col-10 md-col-8 lg-col-4 mx-auto">

			    	<div class="sm-col-12 center mx-auto">
						<img class="py4" src="images/tilt2_selfie.png" alt=" Screenshot of Mental Selfie Feature" width="360">
			    	</div>

			   		 <div class="sm-col-12">

				    	<form class="" action="<?php echo $_POST['username'] . ".php";?>" method="POST" id="inputForm">
				    	<!-- #the action field tells the form to be processed on this page -->
				    	<!-- http://stackoverflow.com/questions/4783381/same-page-processing -->
				    		<fieldset class="fieldset-reset">
			
									<ul class="list-reset center">

										<label class="aquateal center" for="username">Username</label>
										<li class="m2 center">
									    	<input id="username" class="p2 field-light" type="text" name="username" required value="<?php echo $_POST['username'];?>">
										</li>

										<label for="emotions" class="aquateal">I'm feeling...</label>
										<li class=" m2 dk-grey center">
											<input type="checkbox" name="Emotion1" value="Stressed">Stressed
											<input type="checkbox" name="Emotion2" value="Frustrated">Frustrated    
											<input type="checkbox" name="Emotion3" value="Annoyed">Annoyed
											<br>
											<input type="checkbox" name="Emotion4" value="Jealous">Jealous
											<input type="checkbox" name="Emotion5" value="Lonely">Lonely
											<input type="checkbox" name="Emotion6" value="Worried">Worried
											
										</li>
										
										<label for="because" class="aquateal">...becuase of...</label>
										<li class="m2 dk-grey center" name="because">
											<input type="checkbox" name="because1" value="Homesickness">Homesickness
											<input type="checkbox" name="because2" value="Academics">Academics
											<input type="checkbox" name="because3" value="Relationships">Relationships
											<br>
											<input type="checkbox" name="because4" value="Friendships">Friendships
											<input type="checkbox" name="because5" value="Work">Work
											<input type="checkbox" name="because6" value="Something crappy that happened">Something crappy happened	
										</li>

										<label for="describe" class="aquateal">Jot down a little about what you want to talk about.</label>									
										<li class="m2 center">
											<textarea class="field-light p2" type="text" name="describe" id="describe" placeholder="I dropped my apple, which was my only breakfast.."></textarea>
										</li>


										<label for="email" class="aquateal">(Optional) Email Address</label>
									    <li class="m2 center">
									    	<input id="email" class="p2 field-light" type="email" name="email" value="" placeholder="John@Smith.com">
										</li>

										<li class="center">
											<button class="mt2 h6 lato1 wide white round-button px2" type="submit" onclick="Makefile()">Submit</button>
										</li>
									</ul>
							</fieldset>
						</form>	

					</div>
				</div>
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