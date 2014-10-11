<?php 
namespace app\components;

class WordpressJSONData extends AnotherClass
{
	
	private $url, $objRead;

	function __construct($url){
		$this->url = $url;
		$this->objRead = new ReadPage();
		$this->objRead->url = $this->url;
	}

	private function Read(){
		try{
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($curl, CURLOPT_URL, $this->url);
			$this->result = curl_exec($curl);
			return $this->result;
		}

}
 ?>