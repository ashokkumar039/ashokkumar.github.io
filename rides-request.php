<?php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$phnno = $_POST['phnno'];
	$address = $_POST['address'];
	$date = $_POST['date(mm/dd/yyyy)'];
	$select = $_POST['select'];


	$email_from = 'royalmohanty100@gmail.com';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
						"User Email: $visitor_email.\n".
							"User Phnno: $phnno.\n".
								"User Address: $address.\n".
								"User date(mm/dd/yyyy): $date.\n".
								"User select: $select.\n";

	$to = "kumarmohantya96@gmail.com";
	
	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: rides.php");




