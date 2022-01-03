<?php
	function get_client_ip_env() {
		$ipaddress = '';
		if (getenv('HTTP_CLIENT_IP')){
			$ipaddress = getenv('HTTP_CLIENT_IP');
		}
		else if(getenv('HTTP_X_FORWARDED_FOR')){
			$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
		}
		else if(getenv('HTTP_X_FORWARDED')){
			$ipaddress = getenv('HTTP_X_FORWARDED');
		}
		else if(getenv('HTTP_FORWARDED_FOR')){
			$ipaddress = getenv('HTTP_FORWARDED_FOR');
		}
		else if(getenv('HTTP_FORWARDED')){
			$ipaddress = getenv('HTTP_FORWARDED');
		}
		else if(getenv('REMOTE_ADDR')){
			$ipaddress = getenv('REMOTE_ADDR');
		}
		else{
			$ipaddress = '';
		}
		if ($ipaddress==""||$ipaddress==""){
			$ipaddress="";
		}
		else{
			$ipaddress=md5($ipaddress);
		}
		return $ipaddress;
	}
	$dta=$_POST["dt"];
	$a=get_client_ip_env();
	if($a==$dta){
		$arr = array ('code'=>200,'message'=>'sukses');
	}
	else{
		$arr = array ('code'=>20,'message'=>'');
	}
    echo json_encode($arr); 
?>