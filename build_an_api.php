<?php 
	
	function response($status, $status_message, $data, $all=null) {
	    header("HTTP/1.1: ".$status);
	    header("HTTP-status: ".$status);
	    header("Access-Control-Allow-Origin: *");
		header("Content-Type: application/json; charset=UTF-8");
		header("Access-Control-Allow-Methods: POST");
		header("Access-Control-Max-Age: 3600");
		header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
	    
	    $response['status']=$status;
	    $response['status_message']=$status_message;
	    $response['data']=$data; 
	    $response['all']=$all;
	    $json_response = json_encode($response);
	    echo $json_response;
	}

	response(200, "ok", array(
		"Niza"=>array("age"=>50, "balence"=>70),
		"Jeni"=>array("age"=>50, "balence"=>70),
		"Emma"=>array("age"=>50, "balence"=>70),
		"Kelz"=>array("age"=>50, "balence"=>70)
	), 4);
?>