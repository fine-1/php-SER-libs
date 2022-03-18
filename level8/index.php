<?php
highlight_file(__FILE__);
function filter($name){
    $safe=array("flag","php");
    $name=str_replace($safe,"hack",$name);
    return $name;
}
class test{
    var $user;
    var $pass='daydream';
    function __construct($user){
        $this->user=$user;
    }
}

$param=$_GET['param'];
$profile=unserialize(filter($param));
if ($profile->pass=='escaping'){
    echo file_get_contents("flag.php");
}
?>
<br><a href="../level9">点击进入第九关</a>