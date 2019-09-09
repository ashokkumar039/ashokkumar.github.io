<!DOCTYPE html>
<html>
<head>
	<title>ABOUT US</title>
	<link rel="stylesheet" type="text/css" href="aboutus.css">
</head>
<body>

<div class="contact-title">
	<h1>Say Hello<B></h1>
	<h2>We are always ready to serve you!!!</h2>
</div>
<div class="contact-form">

	<form id="contact-form" method="post" action="contact-form-handler.php">
		<input name="name" type="text" class="form-control" placeholder="Your Name" required></input><br>
		<input name="email" type="text" class="form-control" placeholder="Your Email" required></input><br>
		<input name="phnno" type="text" class="form-control" placeholder="Your phnno" required></input><br>
			<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
		<input type="submit" class="form-control submit" value="SEND MESSAGE"></input>
	</form>
</div>


</body>
</html>