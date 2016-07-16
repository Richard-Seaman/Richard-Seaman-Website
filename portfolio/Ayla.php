<!DOCTYPE html>
<html>

<head>
  	<title>Ayla</title>
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
  	<link rel="stylesheet" type="text/css" href="../css/main.css">
  	<link rel="stylesheet" type="text/css" href="../css/projects.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.min.js"   integrity="sha256-55Jz3pBCF8z9jBO1qQ7cIf0L+neuPTD1u7Ytzrp2dqo="   crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
    <script type='text/javascript' src='../js/projects.js'></script>
	
</head>

<body>
	
    <!-- Fixed navbar -->
	<?php include('portfolioNav.html'); ?>

	<div class="content">

		<!--/ Project Icon -->
	  	<section class="jumbotron">
		  	<div class="container">
			  	<div class="row text-center">
					<img class="profile" src="../img/Ayla.png"/>			
	    		</div>
	  		</div>
	  	</section>

		<!--/ Project Caption -->
        <div class="featurette caption row">
		    <p class="quote lead caption">Closer to Perfection, Everyday</p>  
        </div>

		<!--/ Project Intro -->
        <div class="row featurette">
			
	        <div class="col-md-6">
				<h2 class="featurette-heading">Meet Ayla</h2>
            	<p class="lead">In any office environment, there are particular quality assurance (QA) tasks that need to be done. Often, people aren't aware of what exactly they're supposed to do or just simply don't want to do them. QA tasks may be brushed under the rug in the hope that nobody will ever check them.</p>  
            	<p class="lead">Ayla was developed to put a stop to this. She is an open, A.I. platform for automated QA auditing, technical checks, error hunting and error correction. The aim is to achieve 100% QA compliance, 100% perfection in all documents that leave the office and to ensure that an error is never repeated twice.</p>  
	        </div>
			
	        <div class="col-md-6">
            	<img class="noBG featurette-image img-responsive center-block" src="../img/AylaImages/LyingDown.png" alt="Ayla Checking">       
	        </div>
			
        </div> <!--/ End Featurette -->			

		<!--/ Feature -->
        <div class="row featurette">
			
	        <div class="col-md-6">
				<h2 class="featurette-heading">What exactly does she do it?</h2>
            	<p class="lead">Ayla performs a wide range of tasks in order to achieve her goals.</p>
				<p class="lead">She checks that all required files and documents are present at each stage of a project.</p> 
				<p class="lead">She checks for copies of the same documents on the network. Having two versions or revisions of a report or project document (with the same name) can lead to confusion.</p> 
				<p class="lead">She checks for particular phrases or outdated references. Employees can use some phrases within documents that can potentially lead to conflict or confusion at a later date. Some documents may also require updating when a new standard or reference has been published.</p> 
				<p class="lead">She ensures that all calculations are indexed and have been checked. She automatically records who created and checked them. She checks some of the more standard calculations herself.</p> 
				<p class="lead">She records any changes to project information such as team members, contacts, project stage, building information etc. so that a historic log is maintained.</p> 
				<p class="lead">She also performs some miscellaneous checks such as ensuring spell check is turned on in Word documents and that file paths are not too long.</p> 
	        </div>
			
	        <div class="col-md-6">
			    <div id="aylaCarousel" class="carousel slide col-md-12" data-ride="carousel">
			      	<!-- Indicators -->
			      	<ol class="carousel-indicators">
			        	<li data-target="#aylaCarousel" data-slide-to="0" class="active"></li>
			        	<li data-target="#aylaCarousel" data-slide-to="1"></li>
			        	<li data-target="#aylaCarousel" data-slide-to="2"></li>
			        	<li data-target="#aylaCarousel" data-slide-to="3"></li>
			      	</ol>
			      	<div class="carousel-inner" role="listbox">
			  	        <div class="item active">
			  	          <img src="../img/AylaImages/FileCheck.png" alt="File Check">
			  	        </div>
				        <div class="item">
			  	          <img src="../img/AylaImages/Copies.png" alt="Copies Check">
				        </div>
				        <div class="item">
			  	          <img src="../img/AylaImages/Phrase.png" alt="Phrase Check">
				        </div>
				        <div class="item">
			  	          <img src="../img/AylaImages/Calc.png" alt="Calc Check">
				        </div>
				      	<a class="left carousel-control" href="#aylaCarousel" role="button" data-slide="prev">
				        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				        	<span class="sr-only">Previous</span>
				      	</a>
				      	<a class="right carousel-control" href="#aylaCarousel" role="button" data-slide="next">
				        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				        	<span class="sr-only">Next</span>
				      	</a>
			    	</div><!-- carousel inner--> 						      
	        	</div><!-- carousel-->      
	        </div>
			
        </div> <!--/ End Featurette -->
		
		<!--/ Feature -->
        <div class="row featurette last-featurette">
			
	        <div class="col-md-6">
				<h2 class="featurette-heading">And how does she do it?</h2>
            	<p class="lead">Ayla keeps track of all of the live projects and staff members through a database.</p>
				<p class="lead">She has a series of rule classes. Each rule class can have as many instances as required. For example, the ability to check for a troublesome phrase in a document is implemented by a particular rule class. Each phrase searched for is an instance of that rule class. Overtime, Ayla has populated her own database of rule instances to create and apply each time she scans the network. </p> 
				<p class="lead">Ayla is unleashed periodically. Each time she finds an issue, she makes a record of it and delegates it to the staff member responsible. In addition to highlighting the issue to the  employee, she advises them on how to remedy it and provides quick links and tools to do so where appropriate.</p> 
				<p class="lead">The employee is given an opportunity to provide feedback if they feel the issue has already been dealt with or is not relevant. They also have the opportunity to advise Ayla on what to look out for in future. This may occur if the employee has recently had issues arise that could have been prevented from properly implemented QA. This facility is invaluable in Ayla's quest to continuously improve in order to reach perfection.</p> 
	        </div>
			
	        <div class="col-md-6">
            	<img class="featurette-image img-responsive center-block" src="../img/AylaImages/Feedback.png" alt="Ayla Feedback">       
	        </div>
			
        </div> <!--/ End Featurette -->
		
		<!--/ Project Links -->
	  	<section class="jumbotron">
		  	<div class="container">
			  	<div class="row text-center">
					<img class="profile" src="../img/Ayla.png"/>
		    		<h3 class="quote lead caption">Closer to Perfection, Everyday</h3>  	
	    		</div>
	  		</div>
	  	</section>
		

    </div> <!--/ End Content -->
	
    <!-- Footer -->
	<?php include('../subFooter.html'); ?>


</body>
</html>