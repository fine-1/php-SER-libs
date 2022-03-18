<?php 
highlight_file(__FILE__);
class func
{
        public $key;
        public function __destruct()
        {        
                unserialize($this->key)();
        } 
}

class GetFlag
{       public $code;
        public $action;
        public function get_flag(){
            $a=$this->action;
            $a('', $this->code);
        }
}

unserialize($_GET['param']);

?>
<br><a href="../level5">点击进入第五关</a>