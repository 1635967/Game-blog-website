<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
@include('header')

	<head>
		<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('Styles/Common.css') }}">
	</head>

	<body>


		<div class = "contactContent" >
			<!-- Content -->

            <br></br>

            <div class="container">

                <fieldset>

                    <h3>Quick Contact</h3>
                    <p>Contact us today, and get reply with in 24 hours!</p>

                    <br></br>

                    This Our Email
                    @yield('scripts')
                    <b><script type="text/javascript" src="{{ asset('javascript/email.js')}}"></script></b>

                    <br></br>

                </fieldset>

            </div>




            <br></br>

		</div>


        <footer class="footer">
            @include('footer')
        </footer>
	</body>
</html>
