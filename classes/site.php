<?php
class site{
	// site properties
	CONST NAME = "<h4 style='color: #FF9A00'>Ultimate <span class='text-dark'>Shoe World</span></h4>";
	CONST EMAIL = "ultimateshoeworld23@gmail.com";
	CONST CREATE_PRODUCT = "Create Products";
	CONST PHONE = "08037500349";

	//db properties
	CONST DBHOST = "localhost";
	CONST DBUSER = "root";
	CONST DBPASS = "";
	CONST DBNAME = "canvas_shop";

	// error properties
	public $error;
	public $error_msg;

	public $db;
	public function __construct(){
		try{
		$this->db=new mysqli(self::DBHOST, self::DBUSER, self::DBPASS, self::DBNAME);
	}catch(mysqli_sql_exception $e){
			die("opps datebase connection problem");
		}
	}

	//cross site request forgery properties and methods
	public function set_token(){
		$token=sha1(microtime().rand(0,1000));
		$_SESSION['token']=$token;
		$this->token=$token;
	}

	public function check_token(){
		if(!isset($_SESSION['token']) || !isset($_POST[$_SESSION['token']])){
			$this->error=1;
			$this->error_msg.=" invalid token please refresh &amp; try again <br>";
		}
	}

	//form processing methods
	public function post($x){
		if (isset($_POST[$x])) {
			$x=$_POST[$x];
			$x=trim(strip_tags($x));
			$x=mysqli_real_escape_string($this->db ,$x);
			return $x;
		}else{
			return "";
		}
	}


	//alert methods
	public function set_alert($msg, $type){
		$_SESSION['alert_msg'] = $msg;
		$_SESSION['alert_type'] = $type;
	}
	public function get_alert(){
		if (isset($_SESSION['alert_msg']) && $_SESSION['alert_msg']!="") {
			?>
			<div class="row">
				<div class="alert alert-<?=$_SESSION['alert_type']?>"><?=$_SESSION['alert_msg']?></div>
			</div>
			<?php
			$_SESSION['alert_msg'] = "" && $_SESSION['alert_type'] = "";
		}
	}

	//db query method
	public function q($query_string){
		return $this->db->query($query_string);
	}

	//auth function
	public function auth(){
		if (isset($_SESSION['auth'])) {
			$auth = $_SESSION['auth'];
			$type = 1;
			$check=$this->q("SELECT * FROM users WHERE token = '$auth' AND type = '$type'");
			if ($check->num_rows>0) {
				$check = $check->fetch_assoc();
				$this->uid = $check['uid'];
				$this->user= new user($this->uid, $this->db);
			}else{
				$this->set_alert("please login to continue","danger");
				header("location: login.php");
			}
		}else{
			header("location: login.php");
		}
	}

	//generate a profile code or Pcode
	public function codegen($length, $table, $column){
		$value = sha1(microtime());
		$starting_point = rand(0, 50);
		$code = substr($value, $starting_point, $length);
		$qry_str = "SELECT ".$column." FROM ".$table." WHERE ".$column." = '".$code."' ";
		$check = $this->q($qry_str);
		//echo $this->db->error;
		if ($check->num_rows > 0) {
			$this->codegen($length, $table, $column);
		}else{
			return $code;
		}
	}
}
?>