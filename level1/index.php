<?php
highlight_file(__FILE__);
class a{
	var $act;
	function action(){
		eval($this->act);
	}
}
$a=unserialize($_GET['flag']);
$a->action();
?>
<br><a href="../level2">点击进入第二关</a>