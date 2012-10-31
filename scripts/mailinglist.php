<?php

// Validate E-Mail isn't not a Email
if (filter_var($Email, FILTER_VALIDATE_EMAIL)) {
	} 
	else {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/formerror.htm\">";
	exit;
}

// validate required fields have data
if(trim($Email) == '') {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/formerror.htm\">";
	exit;
}

// posted data to local variables  Rsicora@sicora.com
$EmailTo = $Email;
$headers = "From: contactus@sicora.com" . "\r\n" . "CC: Rsicora@sicora.com";
$Subject = "Mailing List";
$Email = Trim(stripslashes($_POST['Email'])); 
$radiomini = Trim(stripslashes($_POST['radiomini']));
$radiominib = Trim(stripslashes($_POST['radiominib']));
$radiominic = Trim(stripslashes($_POST['radiominic']));

// prepare email body text
$Body = "";
$Body .= "Please add me to your mailing list. ";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "\n";
$Body .= "Request a Design Consultation? ";
$Body .= $radiomini;
$Body .= "\n";
$Body .= "Preferred Means for Us to Contact You: ";
$Body .= $radiominib;
$Body .= "\n";
$Body .= "If By Phone: Preferred time of day to contact: ";
$Body .= $radiominic;

// send email 
$success = mail($EmailTo, $Subject, $Body, $headers);

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/thanks.htm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/formerror.htm\">";
}
?>