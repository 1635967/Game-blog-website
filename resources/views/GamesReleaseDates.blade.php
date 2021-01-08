<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
@include('header')

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Games Release Dates</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('Styles/Common.css') }}">
</head>

	<body>
		<div class = "ReleaseDatesContent">
			<!-- Content -->

				<div class="ReleaseDatesTable">

				<div class="partition">Games Release Dates</div>

					<br></br>
                    <table>
					<br>
					  <tr>
						<th>Game</th>
						<th>Publisher</th>
						<th>Platform</th>
						<th>Release Date</th>
					  </tr>
                        @foreach($releaseDates as $row)
					    <tr>
						    <td>{{$row->Game}}</td>
						    <td>{{$row->Publisher}}</td>
                            <td>{{$row->Platform}} </td>
						    <td>{{$row->ReleaseDate}}</td>
					    </tr>
                        @endforeach


					</table>


					<br></br>

				</div>


					<button onclick="window.print()">Print Table</button>

					<br></br>
		</div>





        <div class="footer">
            @include('footer')

        </div>
	</body>
</html>
