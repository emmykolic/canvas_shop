<?php 
include("db/config.php");
$site->check_token();
$firstname = $site->post("firstname");
$lastname = $site->post("lastname");
$username = $site->post("username");
$email = $site->post("email");
$password = $site->post("password");
$date_created = $site->post("dash");
if ($firstname == ""){
	$site->error = 1;
	$site->error_msg.="Firstname is empty";
}
if ($lastname == ""){
	$site->error = 1;
	$site->error_msg.="Lastname is empty";
}

if ($email == ""){
	$site->error = 1;
	$site->error_msg.="Email is empty";
}
if ($password == ""){
	$site->error = 1;
	$site->error_msg.="Password is empty";
}else{
	$cpassword = $site->post("cpassword");
	if ($password != $cpassword) {
		$site->error=1;
		$site->error_msg.="Passwords Mismatch";
	}else{
		$password = sha1(md5($password));
	}
}
if ($date_created == ""){
	$site->error = 1;
	$site->error_msg.="date is empty<br>";
}
if ($site->error==0) {
	$token = sha1(microtime()).$email;
	$site->q("INSERT INTO users (firstname, lastname, username, email, password, token, dash) VALUES('$firstname', '$lastname', '$username', '$email', '$password', '$token', '$date_created')");
	$site->set_alert("registration successful", "success");
	header("location: login.php");
}else{
	$site->set_alert($site->error_msg, "danger");
	header("location: index.php");
}
?>