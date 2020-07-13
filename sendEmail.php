<?php
	$name=$_POST['name'];
	$visitor_email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	$email_form='szymon.czartoryski@gmail.com';
	
	$email_body="Imię i nazwisko: $name.\n".
						"Temat: $subject.\n";
							
	$to ="nerdfestiwal@gmail.com";
						
						
	$headers="Od: $visitor_email $name\r\n"; 
	$headers.="Temat: $subject\r\n"; 
	$headers.="Wiadomość: $message\r\n";
	
	mail($to,$email_body,$headers);
	
	header("Location: index.html");
	
	
?>