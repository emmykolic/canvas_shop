<?php 
include("db/config.php");
	$site->check_token();
$username = $site->post("username");
$password = $site->post("password");
if ($username == "") {
	$site->error = 1;
	$site->error_msg.="Username is empty";
}
if ($password == "") {
	$site->error = 1;
	$site->error_msg.="Password is Incorrect";
}else{
	$password = sha1(md5($password));
}
print_r($look = $site->q("SELECT * FROM users WHERE username = '$username' AND password = '$password' "));
if ($look->num_rows < 1) {
	$site->error = 1;
	$site->error_msg.="Invalid Credentials";
}else{
	$look = $look->fetch_assoc();
	$token = $look['token'];
}
if ($site->error == 0) {
	$_SESSION['auth'] = $token;
	header("location: home.php");
}else{
	$site->set_alert($site->error_msg, "danger");
	header("location: login.php");
}

?>