<?php
highlight_file(__FILE__);
ini_set('session.serialize_handler', 'php');
session_start();

class test{
    public $name;
    function __destruct(){
        if($this->name=='flag'){
            include('flag.php');
            echo $flag;
        }
        else{
            phpinfo();
        }
    }
}