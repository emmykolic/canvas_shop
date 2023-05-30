<?php 
include("db/config.php");
$site->auth();
//$site->check_token();
$shoe_name = $site->post("shoe_name");
$shoe_price = $site->post("shoe_price");
$description = $site->post("description");
$shoe_brand = $site->post("shoe_brand");
$available_qty = $site->post("available_qty");
$dash = $site->post("date_created");

if ($shoe_name == "") {
	$site->error = 1;
	$site->error_msg."Shoe Name is empty";
}

if ($shoe_price == "") {
	$site->error = 1;
	$site->error_msg.="Shoe Price is empty";
}

if ($description == "") {
	$site->error = 1;
	$site->error_msg.="shoe Description is empty";
}

if ($shoe_brand == "") {
	$site->error = 1;
	$site->error_msg.="Shoe Brand is empty";
}

if ($available_qty == "") {
	$site->error = 1;
	$site->error_msg.="The Available Qunatity is empty";
}

if ($dash == ""){
	$site->error = 1;
	$site->error_msg.="date is empty<br>";
}

$pcode = $site->codegen(10, 'products', 'pcode');
$uid=$site->uid;
if ($site->error == 0) {
	$site->q(" INSERT INTO products (shoe_name, shoe_price, description, shoe_brand, available_qty, pcode, date_created, uid) VALUES('$shoe_name', '$shoe_price', '$description', '$shoe_brand', '$available_qty', '$pcode', '$dash', '$uid')");
	$site->set_alert("Products was successfully inserted", "success");
	header("location:create_shoes_process_two.php?pcode=". $pcode);
}else{
	$site->set_alert($site->error_msg,"danger");
}

?>