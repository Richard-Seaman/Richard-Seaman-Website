<!DOCTYPE html>
<html>

<head>
  	<title>Education</title>
  	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#44b1f8">
	<meta name="theme-color" content="#44b1f8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>	
  	<link rel="stylesheet" type="text/css" href="css/main.css">
  	<link rel="stylesheet" type="text/css" href="css/education.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js"   integrity="sha256-55Jz3pBCF8z9jBO1qQ7cIf0L+neuPTD1u7Ytzrp2dqo="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
    <script type='text/javascript' src='js/education.js'></script>
	
</head>

<body>
	
    <!-- Fixed navbar -->
	<?php include('mainNav.html'); ?>

	<div class="content">
		
	    <div class="container">
			
  	      <div class="row text-center">
			  <img class="coverImage" src="img/ucdGrad.jpg" alt="Graduation"/>	
  	      </div>
		  
  	      <div class="row">
	        <p class="caption"><span class="quote">"I'm the one with the hat"</span><br>Richard Seaman, MEng. BEng.</p>
  	      </div>
			
	      <div class="row">
			
  	        <div class="col-md-4 edEntry">		
				
				<ul class="edList">
					<li><h2 class="edTitle">Masters Degree</h2></li>
					<li><p class="edCourse">"Energy Systems Engineering"</p></li>
					<li><p class="edLoc">University College Dublin</p></li>
					<li><p class="edResult">First Class Honours (1.1)</p></li>
					<li><img class="edImg" src="img/ucdLogo.png" alt="UCD logo"/></li>
					<li><a class="btn btn-lg btn-primary edButton"  target="_blank" href="http://www.ucd.ie/t4cms/ME_Energy_Systems_Engineering.pdf" role="button">Course Details &raquo;</a></li>
				</ul>			
			  
  	        </div>
			
  	        <div class="col-md-4 edEntry">		
				
				<ul class="edList">
					<li><h2 class="edTitle">Bachelors Degree (Hons)</h2></li>
					<li><p class="edCourse">"Building Services Engineering"</p></li>
					<li><p class="edLoc">Dublin Institute of Technology</p></li>
					<li><p class="edResult">First Class Honours (1.1)</p></li>
					<li><img class="edImg" src="img/ditGrad.jpg" alt="DIT degree and medal"/></li>
					<li><a class="btn btn-lg btn-primary edButton"  target="_blank" href="https://www.dit.ie/catalogue/Programmes/Details/DT026" role="button">Course Details &raquo;</a></li>
				</ul>			
			  
  	        </div>
			
  	        <div class="col-md-4 edEntry">		
				
				<ul class="edList">
					<li><h2 class="edTitle">Programming</h2></li>
					<li><p class="edCourse">"Learn by doing"</p></li>
					<li><p class="edLoc">Self taught</p></li>
					<li><p class="edResult">-</p></li>
					<li><img class="edImg" src="img/coding.png"  alt="Coding screen"/></li>
					<li><a class="btn btn-lg btn-primary edButton" href="portfolio.php" role="button">Portfolio &raquo;</a></li>
				</ul>			
			  
  	        </div>
			
	      </div>
		  
	    </div> <!-- /container -->

	  	
		
	</div>
	
    <!-- Footer -->
	<?php include('footer.html'); ?>


</body>
</html>