<?php 
require('protected/ReadPage.class.php');

class FileControl
{
	private $url;

	function __construct($url){
		$this->url = $url;
		$obj = new ReadPage();
		$obj->url = $this->url;
		echo $obj->GetFile();
	}
}
?>