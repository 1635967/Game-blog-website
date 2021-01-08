<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
@include('header')

	<head>
		<title>About</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('Styles/Common.css') }}">

	</head>
	<body>

    <div class = "AboutOurSiteContent" >
        <!-- Content -->

        <div class="partition">About us</div>

        <br></br>

        <h2>Resumes</h2>
        <object data="/Document/Profile.pdf" width="700" height="600"> </object>
        <br></br>
        <object data="/Document/Resume-Abdulaziz-Jaad.pdf" width="700" height="600"> </object>
        <br></br>


    </div>


        <footer class="footer">
            @include('footer')
        </footer>
	</body>
</html>
