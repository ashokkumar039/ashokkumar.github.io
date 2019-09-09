<!DOCTYPE html>
<html>
<head>
	<title>RIDES</title>
	<link rel="stylesheet" type="text/css" href="rides.css">
</head>
<body>

<div class="contact-title">
	<h1>BOOK YOUR RIDE & ENJOY<B></h1>
	<h2>We are always ready to serve you!!!</h2>
</div>
<div class="contact-form">

	<form id="contact-form" method="post" action="rides-request.php">
		<input name="name" type="text" class="form-control" placeholder="Your Name" required></input><br>
		<input name="email" type="text" class="form-control" placeholder="Your Email" required></input><br>
		<input name="phnno" type="text" class="form-control" placeholder="Your phnno" required></input><br>
		<textarea name="address" class="form-control" placeholder="Address" rows="3" required></textarea><br>
			
		<input name="select ur date" type="date" value="select ur date" title="date" class="form-control"></input><br>


		<select>
		<option>select model...</option>
		<option>CLASSIC 350</option>
		<option>CLASSIC 500</option>
		<option>THUNDERBIRD</option>
		<option>CONTINENTAL GT</option>
		<option>HIMALAYAN</option>
		<option>INTERCEPTER</option>
		</select><br>

	
		<input type="submit" class="form-control submit" value="SEND REQUEST"></input>
	</form>
</div>


</body>
</html>