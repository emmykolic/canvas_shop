<?php
class user{
	
	function __construct($uid, $db){
		$user = $db->query("SELECT * FROM users WHERE uid='$uid' ");
		$user = $user->fetch_assoc();
		$this->uid = $user['uid'];
		$this->email = $user['email'];
		$this->username = $user['username'];
		$this->password = $user['password'];
		$this->firstname = $user['firstname'];
		$this->lastname = $user['lastname'];
	}
}		

?>