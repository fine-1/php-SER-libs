<?php
highlight_file(__FILE__);

$c = unserialize($_GET['param']);
$c -> daydream();

/*
In this topic,it is of course possible to pass parameters directly to flag.php, but it is not recommended to use this method to learn SOAP.
flag.php
$flag="*";
$user=$_SERVER['HTTP_USER_AGENT'];
$pass = $_POST['pass'];
if(isset($pass) and isset($user)){
	if($pass=='password' and $user=='admin'){
		file_put_contents('flag.txt',$flag);
	}	
}
*/
?>
<br><a href="../level1">点击进入第十一关</a>