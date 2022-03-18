<?php
$flag='flag{well_d0ne_you_did_A_good_level10}';
$user=$_SERVER['HTTP_USER_AGENT'];
$pass = $_POST['pass'];
if(isset($pass) and isset($user)){
	if($pass=='password' and $user=='admin'){
		file_put_contents('flag.txt',$flag);
	}	
}
?>
?>