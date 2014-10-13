<?php 
namespace app\components;

class WordpressJSONData
{
	
	private $url, $objRead;

	function __construct($url){
		$this->url = $url;
	}

	private function Read(){
		if(!isset($this->url))
			throw new Exception("URL property is undefined!");

		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_URL, $this->url);
		$this->objRead = curl_exec($curl);
		return $this->objRead;
	}

	public function getRecentPosts(){
		return $this->Read();
	}


}
 ?>