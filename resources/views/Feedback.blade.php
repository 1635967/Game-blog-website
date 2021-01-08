<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
@include('header')

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Feedback</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('Styles/Common.css') }}">
    </head>

	<body>

		<div class = "contactContent" >
			<!-- Content -->

			<div class="partition">Feedback</div>

				<br></br>


				<div class="container">

					<form id="myForm" onsubmit = "return validateForm()" method="POST" action="{{ route('store')}}">
                    @csrf
						<fieldset>
						<legend><b>Sections 1:</b></legend>

						<label for="fname"><b>First Name</b></label>
						<input type="text" id="fname" name="firstname" />

						<label for="lname"><b>Last Name</b></label>
						<input type="text" id="lname" name="lastname" />

						<label for="email"><b>Email</b></label>
						<input type="text" id="email" name="email" />

						<label for="age"><b>Age</b></label>
						<input type="text" id="age" name="age" />

						<p><b>Your Gender?</b></p>
						<label for="male">Male</label>
						<input type="radio" id="male" name="gender" value="male"/>
						<label for="female">Female</label>
						<input type="radio" id="female" name="gender" value="female"/>

						<label for="phone"><b>Phone</b></label>
						<input type="text" id="phone" name="phone" />



						<label for="city"><b>City</b></label>
						<input type="text" id="city" name="city" />

						</fieldset>



						<fieldset>
						<legend><b>Sections 2:</b></legend>

						<p><b>What is your platform?</b></p>
						<label for="ps4">PS4</label>
						<input type="radio" id="ps4" name="platform" value="ps4"/>
						<label for="xo">XO</label>
						<input type="radio" id="xo" name="platform" value="xo"/>
						<label for="pc">PC</label>
						<input type="radio" id="pc" name="platform" value="pc"/>


						<label for="id"><b>Your ID</b></label>
						<input type="text" id="id" name="id"/>


						<p><b>What sections do you like about our site?</b></p>
						<label for="games"> Games</label>
						<input type="checkbox" id="games" name="sections" value="games"/>
						<label for="news"> News</label>
						<input type="checkbox" id="news" name="sections" value="news"/>
						<label for="release"> Games Release Dates</label>
						<input type="checkbox" id="release" name="sections" value="Games Release Dates"/>
						<label for="picture"> Picture Gallery</label>
						<input type="checkbox" id="picture" name="sections" value="Picture Gallery"/>


						<label for="feedback"><b>Feedback</b></label>
						<textarea id="feedback" name="feedback" rows="5" cols="50"></textarea>

						</fieldset>

						<p><input type="submit" value="Submit"/></p>

					</form>

				</div>

				<script type="text/javascript" src="{{ asset('javascript/validation.js')}}"></script>





			<br></br>

		</div>



		<div class="footer">
			@include('footer')
		</div>
	</body>
</html>
