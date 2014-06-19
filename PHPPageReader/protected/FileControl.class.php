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
		$key = "titulo";
		$delimiter = "&quot;$key&quot;";
		$value = htmlspecialchars($this->objRead->GetFile());
		$explode = explode($delimiter, htmlspecialchars($this->objRead->GetFile()));
		$index = strpos($value, $delimiter);
		$newValue = substr($value, $index , strlen($delimiter));
		echo $newValue;
		 exit();
		//$position = strpos($value, "class=titul");
		var_dump($explode[1]); exit();
		echo $value;
	}
}
?>