<?php
class Run
{
	private $phpVersion;

	public function __construct(){
		$phpVersion = phpversion();
		$this->phpVersion = str_replace('.','',$phpVersion);
		$this->PHPVersion($this->phpVersion);
		$this->IsCurl();
	}

	private function PHPVersion($phpVersion){
		if($phpVersion < 402)
			throw new Exception("Upgrade your version of PHP to run PHP Page Reader.");
	}

	private function IsCurl(){
		if(!function_exists('curl_version'))
			throw new Exception("You don't have curl library installed.");
		return true;
	}
}
?>
