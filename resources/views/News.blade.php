<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
@include('header')

	<head>
		<title>News</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('Styles/Common.css') }}">
	</head>
	<body>

		<div class="wrapper">
			<div class = "newsWrapper">

				<!-- news -->
                @foreach($news as $row)
				<a class="newsLink" href="/news/{{$row->Title}}">
					<div class="news">

                            <h1>{{$row->Title}}</h1>
                            <p>{{$row->Paragraph}}</p>
                            <p>{{$row->created_at}}</p>


					</div>

				</a>
                <br>
                @endforeach



			</div>
		</div>

        <footer class="footer">
            @include('footer')
        </footer>
	</body>
</html>
