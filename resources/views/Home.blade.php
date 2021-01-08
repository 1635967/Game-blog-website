<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
@include('header')

	<head>
		<title>Home Page</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('Styles/Common.css') }}">


	</head>
	<body>



		<div class="wrapper">
			<div class="partition">Latest News</div>
			<div class="newsWrapper">
				<!-- news -->
                @foreach($homeNews as $row)
				<a class="newsLink" href="/news/{{$row->Title}}">
					<div class="news">

						        <h1>{{$row->Title}}</h1>
						        <p>{{$row->created_at}}</p>
                        <br>

					</div>
				</a>
                <br>
                @endforeach
			</div>



			<div class="partition">Latest Games</div>
			<div class="gamesWrapper">
				<!-- games -->
                @foreach($homeGames as $row)
                    <div class="gamePortion">
                        <a class="gameLink" href="/games_list/{{$row->Gname}}"><img src="data:image/png;base64,{{ chunk_split(base64_encode($row->Cover)) }}" >
                            <div class="caption"><b>{{$row->Gname}}</b></div></a>
                    </div>
                @endforeach





			</div>
		</div>

		<footer class="footer">
            @include('footer')
		</footer>
	</body>
</html>
