<?php 
/**
* 
*/
class ReadPage
{
	private static $url;

	public static function ini($url){
		try{
		SELF::$url = $url;
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		$result = curl_exec($curl);
		return $result;
	}
}
?>