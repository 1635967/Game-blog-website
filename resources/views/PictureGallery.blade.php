<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
@include('header')

<head>
    <title>Picture Gallery</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('Styles/Common.css') }}">


</head>

	<body>

		<div class = "ReleaseDatesContent" >
			<!-- Content -->
			<div class="partition">Picture Gallery</div>

			<br></br>
					<div class="GalleryContainer">
                        @foreach($gallery as $row)
                            <div class="mySlides">
                              <img src="data:image/png;base64,{{ chunk_split(base64_encode($row->media)) }}" style="width:100%" alt="Picture Gallery1"/>
                            </div>
                        @endforeach

                       <a class="Galleryprev" onclick="plusSlides(-1)">&#10094;</a>
                       <a class="Gallerynext" onclick="plusSlides(1)">&#10095;</a>


                        <div class="caption-container">
						<p id="caption"></p>
					  </div>

					  <div class="row">
                          @foreach($gallery as $row)
                              <div class="column">
						        <img class="demo cursor" src="data:image/png;base64,{{ chunk_split(base64_encode($row->media)) }}" style="width:100%" onclick="currentSlide(1)" alt="The Friday 13th"/>
                              </div>
                          @endforeach

					  </div>
					</div>

					<script type="text/javascript" src="{{ asset('javascript/gallery.js')}}"></script>

					<br></br>

		</div>


		<div class="footer">
            @include('footer')

		</div>
	</body>
</html>
