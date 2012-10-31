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

// posted data to local variables
$EmailTo = $Email;
$headers = "From: contactus@sicora.com" . "\r\n" . "CC: Rsicora@sicora.com";
$Subject = "Contact Information";
$Sicora = Trim(stripslashes($_POST['Sicora']));
$Name = Trim(stripslashes($_POST['Name'])); 
$Phone = Trim(stripslashes($_POST['Phone'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Address = Trim(stripslashes($_POST['Address']));
$City = Trim(stripslashes($_POST['City']));
$State = Trim(stripslashes($_POST['State']));
$Zip = Trim(stripslashes($_POST['Zip']));
$Built = Trim(stripslashes($_POST['Built']));
$radiomini = Trim(stripslashes($_POST['radiomini']));
$radiominib = Trim(stripslashes($_POST['radiominib']));
$checkboxa = Trim(stripslashes($_POST['checkboxa']));
$checkboxb = Trim(stripslashes($_POST['checkboxb']));
$checkboxc = Trim(stripslashes($_POST['checkboxc']));
$checkboxd = Trim(stripslashes($_POST['checkboxd']));
$checkboxe = Trim(stripslashes($_POST['checkboxe']));
$checkboxf = Trim(stripslashes($_POST['checkboxf']));
$checkboxf = Trim(stripslashes($_POST['checkboxg']));
$checkboxf = Trim(stripslashes($_POST['checkboxh']));
$Other = Trim(stripslashes($_POST['Other']));
$Message = Trim(stripslashes($_POST['Message']));
$Notes = Trim(stripslashes($_POST['Notes']));
$checkbox01 = Trim(stripslashes($_POST['checkbox01']));

// prepare email body text
$Body = "";
$Body .= "Sicora Staff: ";
$Body .= $Sicora;
$Body .= "\n";
$Body .= "\n";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "City: ";
$Body .= $City;
$Body .= "\n";
$Body .= "State: ";
$Body .= $State;
$Body .= "\n";
$Body .= "Zip: ";
$Body .= $Zip;
$Body .= "\n";
$Body .= "Year Built: ";
$Body .= $Built;
$Body .= "\n";
$Body .= "\n";
$Body .= "Are you currently consideing remodeling? ";
$Body .= $radiomini;
$Body .= "\n";
$Body .= "\n";
$Body .= "If YES, when do you prefer to begin the planning process? ";
$Body .= $radiominib;
$Body .= "\n";
$Body .= "\n";
$Body .= "What Type of Issue(s) are You interested in Learning More About? ";
$Body .= "\n";
$Body .= $checkboxa;
$Body .= ", ";
$Body .= $checkboxb;
$Body .= ", ";
$Body .= $checkboxc;
$Body .= ", ";
$Body .= $checkboxd;
$Body .= ", ";
$Body .= $checkboxe;
$Body .= ", ";
$Body .= $checkboxf;
$Body .= ", ";
$Body .= $checkboxg;
$Body .= ", ";
$Body .= $checkboxh;
$Body .= "\n";
$Body .= "\n";
$Body .= "If Other please explain: ";
$Body .= $Other;
$Body .= "\n";
$Body .= "\n";
$Body .= "Please tell us about your wants as it relates to a remodel of your home: ";
$Body .= $Message;
$Body .= "\n";
$Body .= "\n";
$Body .= "Notes: ";
$Body .= $Notes;
$Body .= "\n";
$Body .= "\n";
$Body .= "I would like to join Sicora's Mailing List: ";
$Body .= $checkbox01;

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/thanks.htm\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://app-platform.net/formerror.htm\">";
}
?>