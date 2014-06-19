<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require('protected/ReadPage.class.php');
$obj = new ReadPage();
$obj->url = $_GET['pag'];
$obj->Start();
?>