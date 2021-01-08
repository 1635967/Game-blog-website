<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('Styles/MainStyle.css') }}">
	</head>
	
	<body>

		<div class="logo">
			<!-- Logo -->
			<img src="{{ asset('Pictures/controller.png') }}" alt="Logo">
		</div>

		<div class="toolbar">
			<!-- Where we place Home,Games,News,About us and Contact us -->
			<a href="#">Home</a>
			<a href="#">Games</a>
			<a href="#">News</a>
			<a href="#">About</a>
			<a href="#">Contact us</a>
		</div>
		
		<div class = "content" >
			<!-- Content -->
			
			<div class="games" >
			
				<div class="gameCover">
					<img src="Resources\Pictures\games\LastOfUs.jpg" >
						<div class="gameInformation">
							<h1>The Last of Us</h1>
							<p><b>Developer:</b> 	 Naughty Dog</p>
							<p><b>Publisher:</b> 	 Sony Computer Entertainment</p>
							<p><b>Genre: </b>	     Action-adventure, Survival horror</p>
							<p><b>Platform: </b>	 PlayStation 3, PlayStation 4</p>
							<p><b>Release:	</b>     June 14, 2013</p>
							
							<div class="gameRating">
					
							<div class="gamehead"><h2>Rating</h2></div>
							<div class="gamehead"><h2>Price</h2></div>
							
							<br></br>
							
							<img src="Resources\Pictures\games\Rating.png" >
							<div class="gameRatingNum"><h1>8.3/10</h1></div>
							
							<img src="Resources\Pictures\games\price.png" >
							<div class="gameRatingNum"><h1>60 USD</h1></div>
					
							</div>
							
						</div>
				</div>
				
				
					<div class="gameDescription">
						<h2>Description</h2>
						<p><b>The Last of Us</b> is a 2013 action-adventure game developed by Naughty Dog and published by Sony Computer Entertainment. 
						Players control Joel, a smuggler tasked with escorting a teenage girl, Ellie, across a post-apocalyptic United States. 
						The Last of Us is played from a third-person perspective. Players use firearms and improvised weapons, and can use stealth to 
						defend against hostile humans and cannibalistic creatures infected by a mutated strain of the Cordyceps fungus. 
						In the online multiplayer mode, up to eight players engage in cooperative and competitive gameplay.</p>
						
						<p>Development of The Last of Us began in 2009, soon after the release of Naughty Dog's previous game, 
						Uncharted 2: Among Thieves. For the first time in the company's history, Naughty Dog split into two teams; 
						while one team developed Uncharted 3: Drake's Deception, the other half developed The Last of Us. 
						The relationship between Joel and Ellie became the focus, with all other elements developed around it. 
						Actors Troy Baker and Ashley Johnson portrayed Joel and Ellie respectively through voice and motion capture, 
						and assisted creative director Neil Druckmann with the development of the characters and story. 
						The original score was composed and performed by Gustavo Santaolalla.</p>
						
						<p>Following its announcement in December 2011, The Last of Us was widely anticipated. It was released for the 
						PlayStation 3 in June 2013, and for the PlayStation 4 in July 2014.[a] Upon release, it received critical acclaim, 
						with praise directed at its narrative, gameplay, visuals, sound design, characterization, and depiction of female characters. 
						The Last of Us became one of the best-selling video games of all time, selling over 1.3 million units in its first 
						week and 17 million by April 2018. The game won year-end accolades, including multiple Game of the Year awards from 
						several gaming publications, critics, and game award ceremonies, and is considered one of the greatest video games ever made.</p>
						
						<p>After the game's release, Naughty Dog released several downloadable content additions. 
						The Last of Us: Left Behind adds a single-player campaign following Ellie and her best friend Riley. 
						A sequel, The Last of Us Part II, was announced in December 2016.</p>
					</div> 
				
				
					<div class="gameImage">
						<h2>GamePlay Image</h2>
						<img src="Resources\Pictures\games\111.jpg" >
						<img src="Resources\Pictures\games\222.jpg" >
						<img src="Resources\Pictures\games\333.jpg" >
					</div>
				
				
			</div>
			
		</div>
		
		
		<div class="footer">
			<!-- Bottom element -->
		</div>
	</body>
</html>