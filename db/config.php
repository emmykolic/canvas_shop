<?php 
session_start();
define("SUBTITLE", "Create Products/Dashboard");

function my_autoloader($classname){
	$filename = "classes/".$classname.".php";
	if (file_exists($filename)) {
		include ($filename);
	}
}
spl_autoload_register("my_autoloader");
$site = new site();

?>