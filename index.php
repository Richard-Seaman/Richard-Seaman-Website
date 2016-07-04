<!DOCTYPE html>
<html>

<head>
  	<title>Richard Seaman</title>
  	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
  	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link rel="stylesheet" type="text/css" href="css/index.css">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js"   integrity="sha256-55Jz3pBCF8z9jBO1qQ7cIf0L+neuPTD1u7Ytzrp2dqo="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
    <script type='text/javascript' src='js/index.js'></script>
	
	
</head>

<body>
	
    <!-- Fixed navbar -->
	<?php include('mainNav.html'); ?>
	
	<div class="content">
	  
	  	<section class="jumbotron">
		  	<div class="container">
			  	<div class="row text-center">
					<img id="profile" src="img/profilePic.jpg"/>
				  	<h2>Richard Seaman</h2>
	      			<h3>Mobile Full Stack Developer</h3>				
	    		</div>
	  		</div>
	  	</section>
  
	  	<section id="main_buttons" class="container">
	    	<div class="row text-center">
				<a href="portfolio.php">
	      	  		<figure class="col-md-3 col-sm-3 col-xs-6">
	        			<p>PORTFOLIO</p>
						<div class="shakeable">
	     					<img src="img/portfolio.png"/>					
						</div>
	    			</figure>
				</a>
				<a href="education.php">
	    			<figure class="col-md-3 col-sm-3 col-xs-6">
	     				<p>EDUCATION</p>
						<div class="shakeable">
	     					<img src="img/graduationCap.png"/>				
						</div>
	    			</figure>
				</a>
				<a href="interests.php">
	      	  		<figure class="col-md-3 col-sm-3 col-xs-6">
	        			<p>INTERESTS</p>
						<div class="shakeable">
	     					<img src="img/Interests.png"/>				
						</div>
	    			</figure>
				</a>
				<a href="contact.php">
	    			<figure class="col-md-3 col-sm-3 col-xs-6">
	     				<p>CONTACT</p>
						<div class="shakeable">
	     					<img src="img/Messenger-Pigeon.png"/>				
						</div>
	    			</figure>
				</a>
	  		</div>		
		</section>
	
	</div>
	
    <!-- Footer -->
	<?php include('footer.html'); ?>


   
</body>
</html>
