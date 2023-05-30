<?php 
include("db/config.php");
//$site->check_token();
$name = $site->post("name");
$email = $site->post("email");
$subject = $site->post("subject");
$message = $site->post("message");

if ($name == "") {
	$site->error = 1;
	$site->error_msg.="Name Filed is empty, Fil it";
}
if ($email == "") {
	$site->error=1;
	$site->error_msg.="Email Field is empty, Fil it";
}
if ($subject == "") {
	$site->error=1;
	$site->error_msg.="Subject Field is empty, Fil it";
}
if ($message == "") {
	$site->error=1;
	$site->error_msg.="Message Field is empty, Fil it";
}
 if ($site->error==0) {
	//$token = sha1(microtime()).$email;
	$site->q("INSERT INTO contact_admin (name, email, subject, message) VALUES('$name', '$email', '$subject', '$message')");
	$site->set_alert("The Admin Has Recieved Your Message", "success");
	header("location: contact.php");
}else{
	$site->set_alert($site->error_msg, "danger");
	header("location: index.php");
}

?>