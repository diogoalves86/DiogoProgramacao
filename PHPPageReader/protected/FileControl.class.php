<?php 
require('protected/ReadPage.class.php');

class FileControl
{
	private $url, $objRead;

	function __construct($url){
		$this->url = $url;
		$this->objRead = new ReadPage();
		$this->objRead->url = $this->url;
		$this->GetLinksOfArticle("div", "titulo");
	}

	private function GetLinksOfArticle($cssSelectorOfContainerTitle, $cssClassOfContainerTitle, $classHead = null, $classMessage = null){
		//<div class = "titulo">
		$delimiterContainerTitle = "&quot;$cssClassOfContainerTitle&quot;&gt;";
		$initialHTML = htmlspecialchars($this->objRead->GetFile());
		$linkTag = "href=&quot;";
		$indexOfContainerTitle = strpos($initialHTML, $delimiterContainerTitle);
		$matches = array();

		// Get the index of the seletor's end.</seletor>
		//var_dump($endTagPosition); exit();
		var_dump($initialHTML); echo "<br><br><br><br>";

		$newValue = substr($initialHTML, ($indexOfContainerTitle + strlen($delimiterContainerTitle)));
		
		var_dump($newValue); echo "<br><br><br><br>";
		preg_match_all("/&lt;".$cssSelectorOfContainerTitle." class=&quot;".$cssClassOfContainerTitle."&quot;&gt;(?s).+/", $initialHTML, $matches);
		var_dump($matches);
		exit();
	}
}
?>