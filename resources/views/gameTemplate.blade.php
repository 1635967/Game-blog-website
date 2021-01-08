<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
@include('header')

	<head>
		<title>{{$game[0]->Gname}}</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('Styles/Common.css') }}">
	</head>

	<body>





		<div class = "gamesContent" >
			<!-- Content -->

			<div class="OneGames" >
				<div class="gameCover">
					<img src="data:image/png;base64,{{ chunk_split(base64_encode($game[0]->Cover)) }}">
						<div class="gameInformation">
							<h1>{{$game[0]->Gname}}</h1>
							<p><b>Developer:</b> 	 {{$game[0]->Developer}}</p>
							<p><b>Publisher:</b> 	 {{$game[0]->Publisher}}</p>
							<p><b>Genre: </b>	     {{$game[0]->Genre}}</p>
							<p><b>Platform: </b>	 {{$game[0]->Platform}}</p>
							<p><b>Release:	</b>     {{$game[0]->ReleaseDate}}</p>

							<div class="gameRating">


							<br></br>

							<img src="{{ asset('Pictures/Rating.png') }}" >
							<div class="gameRatingNum"><h1>rate</h1></div>
                                <div class="gamehead"><h2>{{$game[0]->Rating}}</h2></div>

                            <br></br>


							<img src="{{ asset('Pictures/price.png') }}" >
							<div class="gameRatingNum"><h1>price</h1></div>
                                <div class="gamehead"><h2>{{$game[0]->Price}}</h2></div>



							</div>

						</div>
				</div>


					<div class="gameDescription">
						<h2>Description</h2>
						<p>{{$game[0]->Description}}</p>

					</div>


                <div class="slideshow-container">
                    <h2 class="hed">Gameplay Images</h2>
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="data:image/png;base64,{{ chunk_split(base64_encode($game[0]->Media1)) }}" style="width:100%">

                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="data:image/png;base64,{{ chunk_split(base64_encode($game[0]->Media2)) }}" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="data:image/png;base64,{{ chunk_split(base64_encode($game[0]->Media3)) }}" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>

                </div>


                <script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        if (n > slides.length) {slideIndex = 1}
                        if (n < 1) {slideIndex = slides.length}
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex-1].style.display = "block";
                        dots[slideIndex-1].className += " active";
                    }
                </script>

                <div class="gameVideo">
                    <h2>GameTriler</h2>
                    <iframe width="700" height="400" src="{{$game[0]->Trailer}}">
                    </iframe>
                </div>

			</div>

		</div>


        <footer class="footer">
            @include('footer')
        </footer>


    </body>

</html>
