<!DOCTYPE html>
<html>

<head>
  	<title>Toolbox</title>
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
					<img class="profile" src="../img/toolbox.png"/>			
	    		</div>
	  		</div>
	  	</section>

		<!--/ Project Caption -->
        <div class="featurette caption row">
		    <p class="quote lead caption">Quick calculation checks while out of the office</p>  
        </div>

		<!--/ Project Intro -->
        <div class="row featurette">
	        <div class="col-md-6">
				<h2 class="featurette-heading">Handy Tools</h2>
            	<p class="lead">Building Services Toolbox is, you guessed it, a toolbox for Building Services Engineers!</p>
				<p class="lead">It is available on iOS devices and includes a duct sizer, a heating and chilled water pipe sizer, a water pipe sizer (based on simultaneous demand) and a simplified daylight calculator.</p> 
				<p class="lead">The tools included are not meant to replace detailed calculations. They were developed to allow engineers to quickly check sizes while on site or out of the office.</p>          
	        </div>
	        <div class="col-md-6">
            	<img class="appHome featurette-image img-responsive center-block" src="../img/iOS/Toolbox/Home.png" alt="Home">       
	        </div>
        </div>
		
		<!--/ Duct Sizer -->
        <div class="row featurette">
	        <div class="col-md-6">
				<h2 class="featurette-heading">Duct Sizer</h2>
            	<p class="lead">This calculator allows the user to size circular and rectangular ductwork.</p>
				<p class="lead">To begin, the user must enter a flowrate at the top of the screen. A m3/s or m3/hr value may be input directly. Alternatively, a room area and an air change per hour (ACH) may be entered. The flowrate method being used is highlighted to avoid confusion. Once the flowrate has been determined, the duct may be sized manually or automatically.</p> 
				<p class="lead">Manually sizing the duct allows the engineer to examine the resulting air flow velocities and pressure drops for a given duct dimension. To do so, the user simply drags the sliders provided or enters a dimension in either of the textboxes. Again, the dimension being altered is highlighted to avoid confusion. The results are updated and displayed for the user for each incremental change in dimension.</p>
				<p class="lead">To automatically size the duct, the user must enter a maximum air velocity and optionally specify an aspect ratio (rectangular duct only). Alternatively, the user may select one of the default limiting velocities at the bottom of the screen (typically used in various parts of the building). For rectangular ductwork, the user may <span class="quote">lock</span> one of the dimensions so that only one side of the duct may be altered by the automatic sizer. This is useful if the duct's dimension is constrained in one direction.</p> 
				<p class="lead">By tapping on the settings icon, the user can examine the methodology, parameters and formulae used. The parameters may be altered as required or reset to defaults.</p>           
	        </div>
	        <div class="col-md-6">
			    <!-- Carousel
			    ================================================== -->
			    <div id="ductCarousel" class="carousel slide col-md-12" data-ride="carousel">
			      	<!-- Indicators -->
			      	<ol class="carousel-indicators">
			        	<li data-target="#ductCarousel" data-slide-to="0" class="active"></li>
			        	<li data-target="#ductCarousel" data-slide-to="1"></li>
			        	<li data-target="#ductCarousel" data-slide-to="2"></li>
			        	<li data-target="#ductCarousel" data-slide-to="3"></li>
			        	<li data-target="#ductCarousel" data-slide-to="4"></li>
			        	<li data-target="#ductCarousel" data-slide-to="5"></li>
			      	</ol>
			      	<div class="carousel-inner" role="listbox">
			  	        <div class="item active">
			  	          <img src="../img/iOS/Toolbox/Duct.png" alt="Duct Sizer">
			  	        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/Duct1.png" alt="Duct Sizer Rectangular">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/Duct2.png" alt="Duct Sizer Circular">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/Duct3.png" alt="Duct Sizer Method">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/Duct4.png" alt="Duct Sizer Variables">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/Duct5.png" alt="Duct Sizer Formuale">
				        </div>
				      	<a class="left carousel-control" href="#ductCarousel" role="button" data-slide="prev">
				        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				        	<span class="sr-only">Previous</span>
				      	</a>
				      	<a class="right carousel-control" href="#ductCarousel" role="button" data-slide="next">
				        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				        	<span class="sr-only">Next</span>
				      	</a>
			    	</div><!-- carousel inner--> 						      
	        	</div><!-- carousel-->
			</div><!-- column-->
        </div>	
		
		<!--/ Pipe Sizer -->
        <div class="row featurette">
	        <div class="col-md-6">
				<h2 class="featurette-heading">Pipe Sizer</h2>
            	<p class="lead">This calculator allows the user to size heating or cooling pipework</p>
				<p class="lead">The user can set the maximum pressure drop to size to using the textbox in the header section at the top of the screen. They can also switch between heating and cooling and between steel and copper using the buttons provided.</p> 
				<p class="lead">There are 6 optional load types that can be configured. To configure a load type, the user must first input the load or flowrate required. If the load is input, the flowrate will be overwritten and vice versa. Next, the quantity of this load type must be set using the textfield or increment buttons provided.</p>
				<p class="lead">The pipe size and resulting variables for each load type are displayed to the right of the screen. The overal pipe size and resulting variables (for all loads in network) are displayed in the header section at the top of the screen.</p> 
				<p class="lead">By tapping on the settings icon, the user can examine the methodology, parameters and formulae used. The parameters may be altered as required or reset to defaults.</p>           
	        </div>
	        <div class="col-md-6">
			    <!-- Carousel
			    ================================================== -->
			    <div id="pipeCarousel" class="carousel slide col-md-12" data-ride="carousel">
			      	<!-- Indicators -->
			      	<ol class="carousel-indicators">
			        	<li data-target="#pipeCarousel" data-slide-to="0" class="active"></li>
			        	<li data-target="#pipeCarousel" data-slide-to="1"></li>
			        	<li data-target="#pipeCarousel" data-slide-to="2"></li>
			        	<li data-target="#pipeCarousel" data-slide-to="3"></li>
			        	<li data-target="#pipeCarousel" data-slide-to="4"></li>
			        	<li data-target="#pipeCarousel" data-slide-to="5"></li>
			        	<li data-target="#pipeCarousel" data-slide-to="6"></li>
			      	</ol>
			      	<div class="carousel-inner" role="listbox">
			  	        <div class="item active">
			  	          <img src="../img/iOS/Toolbox/PipeSizer0.png" alt="Pipe Sizer">
			  	        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/PipeSizer1.png" alt="Pipe Sizer Calc 1">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/PipeSizer2.png" alt="Pipe Sizer Calc 2">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/PipeSizer3.png" alt="Pipe Sizer Calc 3">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/PipeSizer4.png" alt="Pipe Sizer Method">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/PipeSizer5.png" alt="Pipe Sizer Variables">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/PipeSizer6.png" alt="Pipe Sizer Formuale">
				        </div>
				      	<a class="left carousel-control" href="#pipeCarousel" role="button" data-slide="prev">
				        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				        	<span class="sr-only">Previous</span>
				      	</a>
				      	<a class="right carousel-control" href="#pipeCarousel" role="button" data-slide="next">
				        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				        	<span class="sr-only">Next</span>
				      	</a>
			    	</div><!-- carousel inner--> 						      
	        	</div><!-- carousel-->
			</div><!-- column-->
        </div>	
		
		<!--/ Water Sizer -->
        <div class="row featurette">
	        <div class="col-md-6">
				<h2 class="featurette-heading">Water Demand</h2>
            	<p class="lead">This calculator allows cold, hot, mains and rain water pipe sizes to be determined for a given number of outlets.</p>
				<p class="lead">The user enters the number of outlets by using the plus and minus buttons or by typing the number directly. Any additional flowrates required may be entered by using the textfields provided at the bottom of the screen.</p> 
				<p class="lead">Some outlets have a number of piping configurations. For example, a toilet may be fed by cold water or by rain water. The configuration may be toggled between by tapping on the pipe configuration indicator to the left of the outlet icon.</p>
				<p class="lead">Once the number of outlets have been entered, the corresponding demand units and flowrates are calculated. The pipes are automatically sized and the results are displayed at the top of the screen.</p> 
				<p class="lead">By tapping on the settings icon, the user can examine the methodology used. The demand units for each outlet configuration may be altered as required.</p>           
	        </div>
	        <div class="col-md-6">
			    <!-- Carousel
			    ================================================== -->
			    <div id="waterCarousel" class="carousel slide col-md-12" data-ride="carousel">
			      	<!-- Indicators -->
			      	<ol class="carousel-indicators">
			        	<li data-target="#waterCarousel" data-slide-to="0" class="active"></li>
			        	<li data-target="#waterCarousel" data-slide-to="1"></li>
			        	<li data-target="#waterCarousel" data-slide-to="2"></li>
			        	<li data-target="#waterCarousel" data-slide-to="3"></li>
			        	<li data-target="#waterCarousel" data-slide-to="4"></li>
			        	<li data-target="#waterCarousel" data-slide-to="5"></li>
			        	<li data-target="#waterCarousel" data-slide-to="6"></li>
			      	</ol>
			      	<div class="carousel-inner" role="listbox">
			  	        <div class="item active">
			  	          <img src="../img/iOS/Toolbox/WaterSizer0.png" alt="Water Sizer">
			  	        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/WaterSizer1.png" alt="Water Sizer Calc 1">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/WaterSizer2.png" alt="Water Sizer Calc 2">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/WaterSizer3.png" alt="Water Sizer Calc 3">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/WaterSizer4.png" alt="Water Sizer Calc 4">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/WaterSizer5.png" alt="Water Sizer Method">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/WaterSizer6.png" alt="Water Sizer Demand Units">
				        </div>
				      	<a class="left carousel-control" href="#waterCarousel" role="button" data-slide="prev">
				        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				        	<span class="sr-only">Previous</span>
				      	</a>
				      	<a class="right carousel-control" href="#waterCarousel" role="button" data-slide="next">
				        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				        	<span class="sr-only">Next</span>
				      	</a>
			    	</div><!-- carousel inner--> 						      
	        	</div><!-- carousel-->
			</div><!-- column-->
        </div>	
		
		<!--/ Daylight -->
        <div class="row featurette last-featurette">
	        <div class="col-md-6">
				<h2 class="featurette-heading">Daylight Factor</h2>
            	<p class="lead">This calculator allows a simplified daylight factor to be calculated. </p>
				<p class="lead">The method used is based on rectangular rooms with windows on one side and is capable of handling basic obstructions.</p> 
				<p class="lead">The user enters the room length, depth and height and the window length and height. The resulting daylight factor is calculated and displayed. The daylight factor achieved is compared against acceptable levels in schools for reference.</p>
				<p class="lead"></p> 
				<p class="lead">By tapping on the settings icon, the user can adjust the room and window parameters used such as surface reflectances and glazing transmittance. The adjustable parameters are described and shown in labelled diagrams. The user can also reset the default settings.</p>           
	        </div>
	        <div class="col-md-6">
			    <!-- Carousel
			    ================================================== -->
			    <div id="daylightCarousel" class="carousel slide col-md-12" data-ride="carousel">
			      	<!-- Indicators -->
			      	<ol class="carousel-indicators">
			        	<li data-target="#daylightCarousel" data-slide-to="0" class="active"></li>
			        	<li data-target="#daylightCarousel" data-slide-to="1"></li>
			        	<li data-target="#daylightCarousel" data-slide-to="2"></li>
			        	<li data-target="#daylightCarousel" data-slide-to="3"></li>
			      	</ol>
			      	<div class="carousel-inner" role="listbox">
			  	        <div class="item active">
			  	          <img src="../img/iOS/Toolbox/Daylight0.png" alt="Daylight Calculator">
			  	        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/Daylight1.png" alt="Daylight Calculator Settings 1">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/Daylight2.png" alt="Daylight Calculator Settings 2">
				        </div>
				        <div class="item">
			  	          <img src="../img/iOS/Toolbox/Daylight3.png" alt="Daylight Calculator Settings 3">
				        </div>
				      	<a class="left carousel-control" href="#daylightCarousel" role="button" data-slide="prev">
				        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				        	<span class="sr-only">Previous</span>
				      	</a>
				      	<a class="right carousel-control" href="#daylightCarousel" role="button" data-slide="next">
				        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				        	<span class="sr-only">Next</span>
				      	</a>
			    	</div><!-- carousel inner--> 						      
	        	</div><!-- carousel-->
			</div><!-- column-->
        </div>
		
	<!--/ Project Links -->
  	<section class="jumbotron">
	  	<div class="container">
		  	<div class="row text-center">
				<img class="profile" src="../img/toolbox.png"/>	
				<div class="badge-container">
					<a class="badge" target="_blank" href="https://itunes.apple.com/us/app/building-services-toolbox/id1118758962?ls=1&mt=8"><img src="../img/appstore.png"></a>
				</div>					
    		</div>
  		</div>
  	</section>
	
    <!-- Footer -->
	<?php include('../subFooter.html'); ?>

</body>
</html>