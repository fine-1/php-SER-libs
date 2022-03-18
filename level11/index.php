<?php
highlight_file(__FILE__);
class TestObject {
    public function __destruct() {
		include('flag.php');
        echo $flag;
    }
}
$filename = $_POST['file'];
if (isset($filename)){
	echo md5_file($filename);
}
//upload.php
?>
<br><a href="../level12">点击进入第十二关</a>