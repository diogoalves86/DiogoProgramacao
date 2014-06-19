<?php 
require('protected/ReadPage.class.php');

class FileControl
{
	private $url, $objRead;

	function __construct($url){
		$this->url = $url;
		$this->objRead = new ReadPage();
		$this->objRead->url = $this->url;
		$this->Slice();
	}

	public function Slice(){
		//<div class = "titulo">
		$delimiter = '&quot;titulo&quot;';
		$value = explode($delimiter, htmlspecialchars($this->objRead->GetFile()));
		//$position = strpos($value, "class=titul");
		var_dump($value[1]); exit();
		echo $value;
	}
}
?>