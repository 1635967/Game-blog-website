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
					<img src="Resources\Pictures\games\ResdentEvil3.jpg" >
						<div class="gameInformation">
							<h1>Resident Evil 3</h1>
							<p><b>Developer:</b> 	 Capcom</p>
							<p><b>Publisher:</b> 	 Capcom</p>
							<p><b>Genre: </b>	     Survival horror</p>
							<p><b>Platform: </b>	 Microsoft Windows, PlayStation 4, Xbox One</p>
							<p><b>Release:	</b>     3 April 2020</p>
							
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
						<p><b>Resident Evil 3</b> is a survival horror game developed and published by Capcom. 
						It is a remake of Resident Evil 3: Nemesis (1999) and follows Jill Valentine and Carlos Oliveira as 
						they attempt to survive a zombie apocalypse while hunted by the intelligent bioweapon Nemesis. It was released on 
						Microsoft Windows, PlayStation 4, and Xbox One on April 3, 2020. It has an online multiplayer mode, Resident Evil: 
						Resistance. The game received generally favorable reviews from critics, with its graphics, presentation, and gameplay 
						receiving commendation, although criticism was directed towards its short length, pacing, and absence of elements from 
						the original game.</p>
					</div> 
				
				
					<div class="gameImage">
						<h2>GamePlay Image</h2>
						<img src="Resources\Pictures\games\11111.jpg" >
						<img src="Resources\Pictures\games\22222.jpg" >
						<img src="Resources\Pictures\games\33333.jpg" >
					</div>
				
				
			</div>
			
		</div>
		
		
		<div class="footer">
			<!-- Bottom element -->
		</div>
	</body>
</html>