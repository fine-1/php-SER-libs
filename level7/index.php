<?php
highlight_file(__FILE__);
class you
{
    private $body;
    private $pro='';
    function __destruct()
    {
        $project=$this->pro;
        $this->body->$project();
    }
}

class my
{
    public $name;

    function __call($func, $args)
    {
        if ($func == 'yourname' and $this->name == 'myname') {
            include('flag.php');
            echo $flag;
        }
    }
}
$a=$_GET['a'];
unserialize($a);
?>
<br><a href="../level8">点击进入第八关</a>