<?php 
require('protected/Run.class.php');
class ReadPage
{
	public $url = "http://google.com/";

	public function __construct($url){
		$run = new Run();
		$this->url = $url;
		if($run->CanRun() === true)
			$this->Start($url);	
	}

	public function GetUrl(){
		return $this->url;
	}

	private function Start($url){
		try{
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_VERBOSE, true);
		  	curl_setopt($curl, CURLOPT_HEADER, true); 
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
			curl_setopt($curl, CURLOPT_URL, $this->url);
			$result = curl_exec($curl);
			var_dump($result);
		}
		catch(Exception $ex){
			return $ex->getMessage();
		}
	}
}
?>