<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
/*
PHP Page Reader - Developed by Diogo Alves
This is the class which verify if user system has requirements to run PHP Page Reader.

 */

class Run
{
	private $phpVersion;
	private $canRun = false;


	public function __construct(){
		if($this->Verify() === true)
			$this->canRun = true;
	}

	public function CanRun(){
		return $this->canRun;
	}

	private function Verify(){
		$phpVersion = phpversion();
		$this->phpVersion = str_replace('.','',$phpVersion);
		if($this->PHPVersion($this->phpVersion) && $this->IsCurl())
			return true;
	}
	private function PHPVersion($phpVersion){
		if($phpVersion < 402){
			echo("<h1>Upgrade your version of PHP to run PHP Page Reader.</h1>");
			return false;
		}
		else{ return true; }
	}

	private function IsCurl(){
		if(!function_exists('curl_version')){
			echo("<h1>You don't have curl library installed. Please install it to continue.</h1>");
			return false;
		}
		else{ return true; }
	}
}
?>
