<!DOCTYPE html>
<html>

	<head>
		<title> KnowledgeBase Home</title>
		
		<!-- //Bootstrp -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		
		<!-- //Template Stylesheet -->
		<link rel="stylesheet" href="../template.css">
		<link rel="stylesheet" href="knowledgebasecss.css">
		
		<!--type Ahead-->
		
		<script src="http://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
		<style>
		#div1 {
		 color:red;
		 width:100%;
         bottom:0px;
         text-align:left-side;
         z-index:9999;
		 padding: 25px 150px 75px;
		}
		</style>

	</head>

<body>


		    <!-- //navbar -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <a class="navbar-brand" href="../index.html"><img id="workvivo_logo" src="../logo.png"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">

					<div class="btn-group">
					  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Knowledge Base
					  </button>
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="../knowledgebase/HomePage.html">Home Page</a>
						<a class="dropdown-item" href="../knowledgebase/CategoriesPage.html">Categories</a>
						<a class="dropdown-item" href="../knowledgebase/AboutUsPage.html">About us</a>
					  </div>
					</div>
					
					<div class="btn-group">
					  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Ticketing System
					  </button>
					  <div class="dropdown-menu">
						<a class="dropdown-item" href="../ticketingsystem/TicketHomePage.html">Ticket Home Page</a>
						<a class="dropdown-item" href="../ticketingsystem/CreateTicketPage.html">Create Ticket</a>
					  </div>
					</div>
			  
				   <li class="nav-item active">
					<a class="nav-link" href="../faq/FaqPage.html">FAQ</a>
				  </li>
				  
				  
				</ul>
				<!-- <form class="form-inline my-2 my-lg-0"> -->
				  <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
				  <!-- <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button> -->
				<!-- </form> -->
			  </div>
			</nav>
			

			
			<!-- input box -->
			
			<!-- <div id="the-basics"> -->
			  <!-- <input class="typeahead" type="text" placeholder="States of USA"> -->
			<!-- </div> -->
			
			<!--input box-->
			
			  <div class="input-group mb-3" id="the-basics">
			  <div class="input-group-prepend">
			  <span class="input-group-text" id="basic-addon1">Search Articles</span>
			  </div>
			  <input type="text" class="form-control typeahead" placeholder="Type in Articles name" aria-label="Username" aria-describedby="basic-addon1">
              </div>
			
			<!-- Articals and card -->
			
			<br>
			<div class="container">
			
			    <!-- card 1-->
			
				<div class="card">
				  <div class="card-header">
					Featured
				  </div>
				  <div class="card-body">
					<h5 class="card-title">One</h5>
					
					<p class="card-text">A mandatory user profile is a roaming user profile that has been pre-configured by an administrator to 
					specify settings for users. Settings commonly defined in a mandatory profile include (but are not limited to): icons that appear
					on the desktop, desktop backgrounds, user preferences in Control Panel, printer selections, and more. Configuration changes made 
					during a user's session that are normally saved to a roaming user profile are not saved when a mandatory user profile is assigned.<br>

				    Mandatory user profiles are useful when standardization is important, such as on a kiosk device or in educational settings. 
				    Only system administrators can make changes to mandatory user profiles.<br>

				    When the server that stores the mandatory profile is unavailable, such as when the user is not connected to the corporate network, 
				    users with mandatory profiles can sign in with the locally cached copy of the mandatory profile, if one exists. Otherwise, the user 
				    will be signed in with a temporary profile. <br>
					</p>
					
					<a href="#" class="btn btn-primary">Go somewhere</a>
					
				  </div>
				  
				  
				 <!-- card 2-->
				 <div class="card-header">
					Featured
				  </div>
				   <div class="card-body">
					<h5 class="card-title">Two </h5>
					
					<p class="card-text">A mandatory user profile is a roaming user profile that has been pre-configured by an administrator to 
					specify settings for users. Settings commonly defined in a mandatory profile include (but are not limited to): icons that appear
					on the desktop, desktop backgrounds, user preferences in Control Panel, printer selections, and more. Configuration changes made 
					during a user's session that are normally saved to a roaming user profile are not saved when a mandatory user profile is assigned.<br>

				    Mandatory user profiles are useful when standardization is important, such as on a kiosk device or in educational settings. 
				    Only system administrators can make changes to mandatory user profiles.<br>

				    When the server that stores the mandatory profile is unavailable, such as when the user is not connected to the corporate network, 
				    users with mandatory profiles can sign in with the locally cached copy of the mandatory profile, if one exists. Otherwise, the user 
				    will be signed in with a temporary profile. <br>
					</p>
					
					<a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				  
				  <!-- card 3-->
				  <div class="card-header">
					Featured
				  </div>
				   <div class="card-body">
					<h5 class="card-title">Three</h5>
					
					<p class="card-text">A mandatory user profile is a roaming user profile that has been pre-configured by an administrator to 
					specify settings for users. Settings commonly defined in a mandatory profile include (but are not limited to): icons that appear
					on the desktop, desktop backgrounds, user preferences in Control Panel, printer selections, and more. Configuration changes made 
					during a user's session that are normally saved to a roaming user profile are not saved when a mandatory user profile is assigned.<br>

				    Mandatory user profiles are useful when standardization is important, such as on a kiosk device or in educational settings. 
				    Only system administrators can make changes to mandatory user profiles.<br>

				    When the server that stores the mandatory profile is unavailable, such as when the user is not connected to the corporate network, 
				    users with mandatory profiles can sign in with the locally cached copy of the mandatory profile, if one exists. Otherwise, the user 
				    will be signed in with a temporary profile. <br>
					</p>
					
					<a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>
				  
				  <!-- card 4-->
				  
				  <div class="card-header">
					Featured
				  </div>
				  	<div class="card-body">
					<h5 class="card-title">Four</h5>
					
					<p class="card-text">A mandatory user profile is a roaming user profile that has been pre-configured by an administrator to 
					specify settings for users. Settings commonly defined in a mandatory profile include (but are not limited to): icons that appear
					on the desktop, desktop backgrounds, user preferences in Control Panel, printer selections, and more. Configuration changes made 
					during a user's session that are normally saved to a roaming user profile are not saved when a mandatory user profile is assigned.<br>

				    Mandatory user profiles are useful when standardization is important, such as on a kiosk device or in educational settings. 
				    Only system administrators can make changes to mandatory user profiles.<br>

				    When the server that stores the mandatory profile is unavailable, such as when the user is not connected to the corporate network, 
				    users with mandatory profiles can sign in with the locally cached copy of the mandatory profile, if one exists. Otherwise, the user 
				    will be signed in with a temporary profile. <br>
					</p>
					
					<a href="#" class="btn btn-primary">Go somewhere</a>
				   </div>
				   
				   <!-- card 5-->
				   
				  <div class="card-header">
					Featured
				  </div>
				  	<div class="card-body">
					<h5 class="card-title">Five</h5>
					
					<p class="card-text">A mandatory user profile is a roaming user profile that has been pre-configured by an administrator to 
					specify settings for users. Settings commonly defined in a mandatory profile include (but are not limited to): icons that appear
					on the desktop, desktop backgrounds, user preferences in Control Panel, printer selections, and more. Configuration changes made 
					during a user's session that are normally saved to a roaming user profile are not saved when a mandatory user profile is assigned.<br>

				    Mandatory user profiles are useful when standardization is important, such as on a kiosk device or in educational settings. 
				    Only system administrators can make changes to mandatory user profiles.<br>

				    When the server that stores the mandatory profile is unavailable, such as when the user is not connected to the corporate network, 
				    users with mandatory profiles can sign in with the locally cached copy of the mandatory profile, if one exists. Otherwise, the user 
				    will be signed in with a temporary profile. <br>
					</p>
					
					<a href="#" class="btn btn-primary">Go somewhere</a>
				  </div>


				  
				  
				</div>
			
			</div>
			<br>
			<div id="div1"><strong> <p align=center>Disclaimer and Confidentiality Notice</p> </strong>
			        The information contained in these documents is confidential, privileged and only for the information of the intended recipient and may 
			     not be used, published or redistributed without the prior written consent of Workvivo Ltd. 
                 The opinions expressed are in good faith and while every care has been taken in preparing these documents, Workvivo makes no representations 
				 and gives no warranties of whatever nature in respect of these documents, including but not limited to the accuracy or completeness of any 
				 information, facts and/or opinions contained therein. 
                 Workvivo Ltd, its subsidiaries, the directors, employees and agents cannot be held liable for the use of and reliance of the opinions, estimates, 
				 forecasts and findings in these documents. 
			</div>

			
			
			<script type="text/javascript"> 
			
				var substringMatcher = function(strs) {
			     return function findMatches(q, cb) {
				var matches, substringRegex;

				// an array that will be populated with substring matches
				matches = [];

				// regex used to determine if a string contains the substring `q`
				substrRegex = new RegExp(q, 'i');

				// iterate through the pool of strings and for any string that
				// contains the substring `q`, add it to the `matches` array
				$.each(strs, function(i, str) {
				  if (substrRegex.test(str)) {
					matches.push(str);
				  }
				});

				cb(matches);
			  };
			};

			var states = ['One', 'Two', 'Three', 'Four', 'Five'
			  
			];

			$('#the-basics .typeahead').typeahead({
			  hint: true,
			  highlight: true,
			  minLength: 1
			},
			{
			  name: 'states',
			  source: substringMatcher(states)
			});
			
			</script>
			
			
		  
	</body>
</html>