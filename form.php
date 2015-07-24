<?php
	// Getting all the data from the form
	// and storing it in variables
	$email = filter_input(INPUT_POST, "email");
	$firstName = filter_input(INPUT_POST, "fname");
	$lastName = filter_input(INPUT_POST, "lname");
	$businessName = filter_input(INPUT_POST, "nbus");
	$businessDesc = filter_input(INPUT_POST, "desc");
	$logoVal = filter_input(INPUT_POST, "logo");
	$solnVal = filter_input(INPUT_POST, "soln");
	$solnLink = filter_input(INPUT_POST, "link");
	$typeVal = filter_input(INPUT_POST, "type");
	$location = filter_input(INPUT_POST, "location");
	
	// setting up the message for me
	$recepient = "davidmwhynot@gmail.com";
	$subject = "IRIDESCENT MAIL $firstName $lastName";
	$header = "From: Iridescent <contact@iridescentwebdesign.com>"; // this applies to both
	$body = "E-mail: $email
		   \nFirst name: $firstName
		   \nLast name: $lastName
		   \nBusiness name: $businessName
		   \nBusiness description: $businessDesc
		   \nHave logo?: $logoVal
		   \nHave web solution?: $solnVal
		   \nLink to solution: $solnLink
		   \nType of business: $typeVal
		   \nLocation: $location";
	
	// applicant body
	$appBody = "Welcome to Iridescent!\nWe will be getting in contact with you as soon as possible.
				If you don't hear anything in the next hour, we are probably busy today. Expect to
				get a response tomorrow.\n www.IridescentWebDesign.com";
	
	// sending mail
	// to me
	mail($recepient,$subject,$body,$header);
	
	// to applicant
	mail($email,"Welcome to Iridescent!",$appBody,$header)
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Iridescent Design</title>
		<link rel="stylesheet" href="index.css">
	</head>
	<body class="about">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<div class="logoBox">
			<h1><a href="index.html">IRIDESCENT</a></h1>
		</div>
		<div class="underBox">
			<a href="design.html">Design now</a>
			<a href="about.html">Learn more</a>
		</div>
		<div class="content">
			<h2>Success!</h2>
			<p>
				Your information has been sent to a developer. You should also receive a confirmation e-mail
				at the address you provided.
			</p>
			<h2>Where to next?</h2>
			<p id="notAvailable">
				Currently, there are no developers available to get in contact with you. Watch your email over the next day
				and we will be in contact to get started on your FREE design prototype.
			</p>
			<p id="available">
				There is a developer available to get started on your FREE design prototype. Keep in mind this is no
				obligation, and there are no ads or any other processes you have to go through. You just call the number,
				talk to a developer, and get your prototype.<br />
				Your developer: David <br />
				Number: +1(231)343-8583 <br />
				If you don't receive an answer please wait 10-15 minutes for a call back. Thank you for your patience!
			</p>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="formComplete.js"></script>
	</body>
	<script src="fadeBody.js"></script>
</html>