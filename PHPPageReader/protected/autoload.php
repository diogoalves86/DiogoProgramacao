<?php 
function __autoload($file){
	if(file_exists($file.'.class.php'))
		require_once($file);
}
?>