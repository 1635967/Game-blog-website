<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
@include('header')

	<head>
		<title>{{$news[0]->Title}}</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('Styles/Common.css') }}">
	</head>
	<body>
		<div class = "content">
			<div class="news">
                @foreach($news as $row)
                    <h1>{{$row->Title}}</h1>
                    <img src="data:image/png;base64,{{ chunk_split(base64_encode($row->image)) }}">
                    <p>{{$row->Paragraph}}</p>
                    <p>{{$row->Paragraph2}}</p>
                    <p>{{$row->Paragraph3}}</p>
                    <p>{{$row->Paragraph4}}</p>
                    <br>
                @endforeach
			</div>
		<div>
            <footer class="footer">
                @include('footer')
            </footer>
	</body>
</html>
