<!DOCTYPE html>
<html>

<head>
  	<title>Pocket Papers</title>
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
					<img class="profile" src="../img/PocketPapers.png"/>			
	    		</div>
	  		</div>
	  	</section>

		<!--/ Project Caption -->
        <div class="featurette caption row">
		    <p class="quote lead caption">Accessing past examination material has never been so easy.</p>  
        </div>

		<!--/ Project Intro -->
        <div class="row featurette">
	        <div class="col-md-6">
				<h2 class="featurette-heading">Time for Change</h2>
            	<p class="lead">When my younger sister was studying for her Junior Certificate, I saw her using the same poorly designed website I had used over 10 years ago to access past papers. I was amazed that nobody had fixed it yet!</p>
				<p class="lead">I did some research and quickly discovered that students and teachers alike were fed up with www.examinations.ie (the official source of past papers).</p> 
				<p class="lead">It was time for somebody to do something.</p>
				<p class="lead">It was time for <span class="quote">Pocket Papers</span>.</p>            
	        </div>
			<!--/ Video -->
	        <div class="col-md-6">
				<div class="embed-responsive embed-responsive-16by9">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/w6q5Stc74bU?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>            
	        </div>
        </div>
		
		<!--/ Concept -->
        <div class="row featurette">
	        <div class="col-md-6">
				<h2 class="featurette-heading">To the Drawing Board</h2>
            	<p class="lead">The most important part of any <span class="quote">nerding station</span>; the blank canvas. Before writing any code, I always put pen to paper (or marker to board).</p>
				<p class="lead">I believe the most important consideration for any app is the end user experience. Simple is beautiful. Everything else is secondary. Unfortunately, simple is not always easy.</p> 
				<p class="lead">I set a goal for myself:<br>Anything the user wants should be no more than 3 taps away and ALL of the past examination material needs to be available.</p>
				<p class="lead">This goal ultimately shaped both the front and back end of the app and allowed me to start drawing.</p>            
	        </div>
	        <div class="col-md-6">
            	<img class="featurette-image img-responsive center-block" src="../img/whiteboard.JPG" alt="White Board">       
	        </div>
        </div>			
		
		<!--/ Content -->
        <div class="row featurette">
	        <div class="col-md-6">
				<h2 class="featurette-heading">Content Collation</h2>
            	<p class="lead">So what exactly does <span class="quote">"All of the past examination material"</span> consist of?</p>
				<p class="lead">Turns out it's quite a lot. Over 40 Leaving Certificate subjects and 25 Junior Certificate subjects. Each subject has higher and ordinary levels and some also have a foundation level. Some subjects have multiple papers each year (such as maths papers 1 & 2). All of the language subjects have aural exams that require an audio mp3 file to answer. Some subjects have additional content such as ordinance survey maps for geography. There's over 15 years worth of content to get through. And by the way, everything is also available in irish. All in all, there's thousands and thousand of documents to be gathered and collated.</p> 
				<p class="lead">I decided that instead of simply pointing in the right direction of the content, I was going to host it myself. This would give me full control of the content and would elimate my reliance on a third party's website. (This decision came after the SEC <span class="quote">attempted</span> to prevent their website being used for exactly this purpose, but that's another story...)</p>
            	<p class="lead">The official website is tedious to use. Luckily, programs don't mind tedious tasks. I used some of my excel wizardry (Visual Basic) to scrape the website and automatically download and collate the majority of the material. There was still some manual collation required but the work was massively reduced. The end result was an SQL file ready to be imported to a database. It was also a tool that could be used year after year to grab new examination material once it's released. Sweet!</p>				          
	        </div>
	        <div class="col-md-6">
            	<img class="featurette-image img-responsive center-block" src="../img/content.png" alt="Excel Database Creator">       
	        </div>
        </div>
		
		<!--/ API -->
        <div class="row featurette">
	        <div class="col-md-6">
				<h2 class="featurette-heading">API</h2>
            	<p class="lead">With a trove of neatly arranged material available and a database to match, it was time to implement the API.</p>
				<p class="lead">I opted for a shared hosting package (with Register365) that was reasonably priced and offered unlimited bandwidth / databases etc. I used an FTP solution (Filezilla) to upload all of the aquired material and imported my SQL database within phpMyAdmin.</p> 
				<p class="lead">I developed a RESTful API for my apps to access the data. I developed the API locally (using MAMP) before making it live. The apps would POST a request to a particular php file on the server, which in turn would spit out the requested data in JSON format.</p>
            	<p class="lead">Easy.</p>				          
	        </div>
	        <div class="col-md-6">
            	<pre class="pre-xy-scrollable">
// Typical PHP file below:

&lt;?php
/*  
	Author : 		Richard Seaman
	Created: 		17-05-2015   
	Description:	This file returns the available exam papers, in JSON format
			Any errors are returned as {"Error": "Error message here"} 
			Required:		
			$db_name, $db_user, $db_password, $server_url
*/

header('Content-type: application/json');

// Note: "****" added for confidentiality (not actually checking for *'s)
if($_POST['****'] == "****") {

// Set up connection
require 'databaseConfiguration.php';

// Create connection
$conn = new mysqli($server_url, $db_user, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
	$errorArray = array("Error" => "Connection failed: " . $conn->connect_error);
	die (json_encode($errorArray));
}

// Prepare SQL statement
$stmt = "SELECT * 
	FROM ExamPapers";

// Create JSON from the result		
$resultArray = array();
if ($result = $conn->query($stmt)) {
	$tempArray = array();
	while($row = $result->fetch_object()) {
		$tempArray = $row;
		array_push($resultArray, $tempArray);
	}
	// Return the json.
	echo json_encode($resultArray);
}
$result->close();

// Close connection
$conn->close();
		
}

?&gt;</pre>      
	        </div>
        </div>
		
		
		<!--/ iOS -->
        <div class="row featurette">

	        <div class="row multifeature">				
		        <div class="col-md-6">
					<h2 class="featurette-heading">iOS Development</h2>
	            	<p class="lead">Now for the really fun stuff!</p>
					<p class="lead">During the early concept stage I had designed and laid out my storyboard. Every screen and transistion had been mapped out so it was just a case of coding it up and getting the polish out. My focus remained on ensuring the user could get to anything they wanted with the minimum number of taps. </p> 
					<p class="lead">Once I had the app working within Xcode on simulators, I moved on to actual iOS devices. The app is available on iPhone, iPad and iPod touch. Every screen size and orientation was tested and re-tested.</p>			          
		        </div>
		        <div class="col-md-6">
	            	<img class="featurette-image img-responsive center-block" src="../img/iOSDev-content.png" alt="Sketch vs Final">       
		        </div>
			</div>

	        <div class="spacer"></div>

	        <div class="row multifeature">
		        <div class="col-md-6">
	            	<p class="lead">Obviously, you can never foresee every issue and the final design will always differ slightly from the initial (and continously develop over time).</p>
					<p class="lead">Sometimes it is necessary to iterate through a number of designs before arriving at the optimal. For example, I started with a tabbed bar app but moved to a home screen as new features were introduced. The subject papers and aurals were initially shown on separate tabs. With the introduction of the home screen, I took the opportunity to combine these features so that everything the user needed for a single subject was accessible from the same screen. In practice, this was an additional segmented control which updated a table view to show previous papers, previous aurals or available topics (particular questions).</p> 
					<p class="lead">The App Store screenshots provided show the most up to date design of the app.</p>
	            	<p class="lead"></p>				          
		        </div>
		        <div class="col-md-6">
				    <!-- Carousel
				    ================================================== -->
				    <div id="iOSCarousel" class="carousel slide col-md-12" data-ride="carousel">
				      	<!-- Indicators -->
				      	<ol class="carousel-indicators">
				        	<li data-target="#iOSCarousel" data-slide-to="0" class="active"></li>
				        	<li data-target="#iOSCarousel" data-slide-to="1"></li>
				        	<li data-target="#iOSCarousel" data-slide-to="2"></li>
				        	<li data-target="#iOSCarousel" data-slide-to="3"></li>
				        	<li data-target="#iOSCarousel" data-slide-to="4"></li>
				        	<li data-target="#iOSCarousel" data-slide-to="5"></li>
				      	</ol>
				      	<div class="carousel-inner" role="listbox">
				  	        <div class="item active">
				  	          <img src="../img/iOS/Home.png" alt="Home">
				  	        </div>
					        <div class="item">
				  	          <img src="../img/iOS/Subjects.png" alt="Subjects">
					        </div>
					        <div class="item">
				  	          <img src="../img/iOS/SubjectOptions.png" alt="Subject Content">
					        </div>
					        <div class="item">
				  	          <img src="../img/iOS/Paper.png" alt="Paper">
					        </div>
					        <div class="item">
				  	          <img src="../img/iOS/Content.png" alt="Content">
					        </div>
					        <div class="item">
				  	          <img src="../img/iOS/Aural.png" alt="Aural">
					        </div>
					      	<a class="left carousel-control" href="#iOSCarousel" role="button" data-slide="prev">
					        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					        	<span class="sr-only">Previous</span>
					      	</a>
					      	<a class="right carousel-control" href="#iOSCarousel" role="button" data-slide="next">
					        	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					        	<span class="sr-only">Next</span>
					      	</a>
				    	</div><!-- carousel inner--> 						      
		        	</div><!-- carousel-->
				</div><!-- column-->				
        	</div> <!-- row --> 
			
		</div><!-- featurette --> 
	
	
	<!--/ Business Model -->
    <div class="row featurette">
        <div class="col-md-6">
			<h2 class="featurette-heading">Business Model</h2>
        	<p class="lead">I knew that I would have to implement some form of business model if Pocket Papers was to be sustainable. I had already incurred a number of expenses between software packages, hardware (devices) and renting a server. Between the Leaving and Junior Certificates, there's a guaranteed throughput of approximately 120,000 students each year. Not to mention all of the teachers. It's a significant, stable market.</p>
			<p class="lead">I toyed around with (and implemented) a number of business models. I briefly considered using ads but I'm not a big fan of them (I also don't think I've ever clicked on one...). I also considered an annual subscription service but ruled it out as most students will only use it for a year or two anyway. Better to avoid the complexity of subscription services (especially since StoreKit is less than helpful with them). Customers are also more likely to purchase it if it's a once off cost, particularly teachers who can use it year after year.</p> 
			<p class="lead">I decided to go with a freemium model. Users could download the app and use all of the latest year's content for free. This allowed them to familiarise themselves with the app before committing to a purchase. If they wished, they could then purchase <span class="quote">Premium Access</span> which unlocks all of the content for every year for every subject for life.</p>
        	<p class="lead">I thought about managing the purchases myself but I prefer to avoid sign-in screens if possible (for the UX, not the technicalities). Being responsible for transactions didn't appeal to me very much. However, neither did Apple's 30% take. In the end, I bit the bullet and implemented a non-consumable in-app purchase, as per Apple's guidelines. I suppose all of their development, distribution and analysis tools are worth the 30%.</p>				          
        </div>
        <div class="col-md-6">
        	<img class="featurette-image img-responsive center-block" src="../img/business.png" alt="Itunes Connect">       
        </div>
    </div>
	
	
	<!--/ Marketing -->
    <div class="row featurette">
        <div class="col-md-6">
			<h2 class="featurette-heading">Marketing</h2>
        	<p class="lead">I launched Pocket Papers for iOS in April 2015. However, launching an app is only the beginning. I needed to market it!</p>
			<p class="lead">First things first, get a <a href="http://www.pocketpapers.ie" target="_blank">website</a> up and running, complete with a contact page for customer support. And do it fast. Thank you very much Wordpress.</p> 
			<p class="lead">Next up, populate it with nice screenshots and a demonstrational video. I did this using software such as iMovie, Logoist 2, Paint 2 and Promotee. I also set up an App page on facebook and ran a number of paid advertisment campaigns.</p>
        	<p class="lead">I created a promotional poster and printed out and laminated a few hundred A3 copies. I visited schools around my local area and gave presentations to students and teachers, making sure to leave behind a few posters everywhere I went.</p>
        	<p class="lead">I contacted various media agencies and was delighted to be featured in The Journal's <a href="http://www.thejournal.ie/5-apps-31st-oct-2015-2416910-Oct2015/"  target="_blank">"5 apps worth downloading this week"</a> article in October 2015.</p>	
        	<p class="lead">The most technical form of marketing was another piece of Excel Wizardry. I found a website which teachers use to apply for jobs in schools around the country. It has details for every secondary school in the country including principal's name, contact number, school address and email address. Jackpot!! I wrote a program to scrape the required information and send off an email to each school. I was suprised with the number of responses (I was afraid I'd end up in the spam folder). Soon, schools all over the country were benefitting from Pocket Papers.</p>		          
        </div>
        <div class="col-md-6">
        	<img class="featurette-image img-responsive center-block" src="../img/Marketing.png" alt="Marketing">       
        </div>
    </div>
	
	<!--/ Android -->
    <div class="row featurette">
		
        <div class="col-md-6">
			<h2 class="featurette-heading">Demand for Android</h2>
        	<p class="lead">With the sucess of Pocket Papers on iOS came the demand for an Android release. Android accounted for a significant chunk of my market, not having Pocket Papers available for it simply wasn't an option. There was one issue though. I had hardly ever used an Android device, never mind written an app for one.</p>
        	<p class="lead">Luckily, I was finishing up work for the Christmas holidays. I bought myself an Android device and a pile of textbooks and promised myself that version 1.0 would be built before I returned to work. I devoured the textbooks and a number of online tutorials and had soon wrapped my head around intents, activities, fragments, adapters, permissions and all things Android (well enough to build my own app anyway).</p>	
        	<p class="lead">I utilised the same design principles as I did for iOS. The most important consideration remained the end user experience. Keep things simple, and include everything. I was determined to embrace Android rather than try to mimick my iOS version. I studied Android's Material Design guidelines and trialed a number of options before settling on my final design. One month after beginning my Android journey, I released v1.1 of Pocket Papers to the Play Store.</p>          
        </div>
		
        <div class="col-md-6">
		    <!-- Carousel
		    ================================================== -->
		    <div id="androidCarousel" class="carousel slide col-md-12" data-ride="carousel">
		      <!-- Indicators -->
		      <ol class="carousel-indicators">
		        <li data-target="#androidCarousel" data-slide-to="0" class="active"></li>
		        <li data-target="#androidCarousel" data-slide-to="1"></li>
		        <li data-target="#androidCarousel" data-slide-to="2"></li>
		        <li data-target="#androidCarousel" data-slide-to="3"></li>
		        <li data-target="#androidCarousel" data-slide-to="4"></li>
		        <li data-target="#androidCarousel" data-slide-to="5"></li>
		        <li data-target="#androidCarousel" data-slide-to="6"></li>
		        <li data-target="#androidCarousel" data-slide-to="7"></li>
		      </ol>
		      <div class="carousel-inner" role="listbox">
	  	        <div class="item active">
	  	          <img src="../img/Android/Android1.png" alt="Android1">
	  	        </div>
		        <div class="item">
	  	          <img src="../img/Android/Android2.png" alt="Android2">
		        </div>
		        <div class="item">
	  	          <img src="../img/Android/Android3.png" alt="Android3">
		        </div>
		        <div class="item">
	  	          <img src="../img/Android/Android4.png" alt="Android4">
		        </div>
		        <div class="item">
	  	          <img src="../img/Android/Android5.png" alt="Android5">
		        </div>
		        <div class="item">
	  	          <img src="../img/Android/Android6.png" alt="Android6">
		        </div>
		        <div class="item">
	  	          <img src="../img/Android/Android7.png" alt="Android7">
		        </div>
		        <div class="item">
	  	          <img src="../img/Android/Android8.png" alt="Android8">
		        </div>
		      <a class="left carousel-control" href="#androidCarousel" role="button" data-slide="prev">
		        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		        <span class="sr-only">Previous</span>
		      </a>
		      <a class="right carousel-control" href="#androidCarousel" role="button" data-slide="next">
		        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		        <span class="sr-only">Next</span>
		      </a>
		  	</div>
		   </div><!-- /.carousel -->       
        </div>       
    </div>
	
	
	<!--/ Onwards -->
    <div class="row featurette last-featurette">
        <div class="col-md-6">
			<h2 class="featurette-heading">Onwards and Upwards...</h2>
        	<p class="lead">In it's first year of operation, Pocket Papers has been used by over 3,000 students and teachers.</p>
			<p class="lead">I continously develop Pocket Papers and have added a number of additional features since it's initial launch. For example, I added some fun colour and backpack selection options to the iOS app. I also refined the file management system to improve it's efficiency and speed.</p> 
        	<p class="lead">The most sought after feature however, was the ability to search previous material by topic. This would allow a student to practice all of the previous questions for a particular topic rather than routing through past papers to find the relevant questions.</p>  
        	<p class="lead">Easier said than done! The difficulty isn't with the programming technicalities but with the additional content collation required. In order to provide this facility, every subject's documents must be further sub divided and assigned into various topics. A single past paper could have up to 15 questions with each year having multiple papers for every level and language.</p>  
        	<p class="lead">I definately wasn't going to manually crop thousands of documents. I automated much of the work with some more Excel Wizardry. I built an Excel based interface for mass splitting, merging and cropping of PDF files. The interface also collated the resulting content and exported an SQL database file (of questions and their associated topics). Unfortunately there is still some manual input required. It is impossible to tell where each question ends as the would be search terms and layouts change from paper to paper and from year to year.</p>  
        	<p class="lead">At the moment, I'm adding to the number of topics available for students. I'm also pushing updates as required by Apple and Android system updates.</p>        
        </div>
        <div class="col-md-6">
        	<img class="featurette-image img-responsive center-block" src="../img/Topics.png" alt="Topics">       
        </div>
    </div>	
	
	
	<!--/ Project Links -->
  	<section class="jumbotron">
	  	<div class="container">
		  	<div class="row text-center">
				<img class="profile" src="../img/PocketPapers.png"/>	
				<div class="badge-container">
					<a class="badge" target="_blank" href="https://itunes.apple.com/us/app/pocket-papers-leaving-certificate/id1013587533?ls=1&mt=8"><img src="../img/appstore.png"></a>
					<a class="badge" target="_blank" href="https://play.google.com/store/apps/details?id=com.richapps.pocketpapers"><img src="../img/playstore.png"></a>
				</div>					
    		</div>
  		</div>
  	</section>
	
    <!-- Footer -->
	<?php include('../subFooter.html'); ?>

</body>
</html>