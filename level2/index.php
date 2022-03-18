<?php
highlight_file(__FILE__);
include("flag.php");
class mylogin{
    var $user;
	var $pass;
	function __construct($user,$pass){
		$this->user=$user;
		$this->pass=$pass;
	}
    function login(){
		if ($this->user=="daydream" and $this->pass=="ok"){
			return 1;
		}
    }
}
$a=unserialize($_GET['param']);
if($a->login())
{
	echo $flag;
}
?> 
<br><a href="../level3">点击进入第三关</a>