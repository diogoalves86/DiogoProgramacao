<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');
class ReadPage
{
	private $url;

	public static function ini($url){
		try{
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
			$result = curl_exec($curl);
			return $result;
		}
		catch(Exception $ex){
			return $ex->getMessage();
		}
	}
}
?>