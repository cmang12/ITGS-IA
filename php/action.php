<?php
$name = $_POST['name'];
$email_from = $_POST['email'];
$subforcontact = $_POST['subject'];
$content = $_POST['content'];

$email_subject= "Form Submission from Sweet Glaze";
$email_body= "Visitor Name: $name.\n".
					"Visitor email: $email.\n".
						"Visitor Subject: $subforcontent.\n".
							"Visitor Content: $content.\n";
								
		$to= "fenylau@gmail.com";
	$headers= "From".$email_from;
mail($to,$email_subject,$email_body,$headers);
		header("Location: contact.html");
			
?> 


