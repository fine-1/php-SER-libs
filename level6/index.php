<?php
highlight_file(__FILE__);
class secret{
    private $comm;
    public function __construct($com){
        $this->comm = $com;
    }
    function __destruct(){
        echo eval($this->comm);
    }
}
$param=$_GET['param'];
$param=str_replace("%","daydream",$param);
unserialize($param);
?>
<br><a href="../level7">点击进入第七关</a>