<?php
highlight_file(__FILE__);
ini_set('session.serialize_handler', 'php_serialize');
session_start();
$_SESSION['a'] = $_GET['a'];
?>