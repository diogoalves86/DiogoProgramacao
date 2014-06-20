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

		// Get the index of the seletor's end.</seletor>
		//var_dump($endTagPosition); exit();
		var_dump($initialHTML); echo "<br><br><br><br>";

		$newValue = substr($initialHTML, ($indexOfContainerTitle + strlen($delimiterContainerTitle)));
		$indexOfLinkTag = strpos($newValue, $linkTag);

		$href = substr($newValue, ($indexOfLinkTag + (strlen($linkTag) - 1)), strpos($newValue, "/&quot;&gt;"));
		var_dump($href); echo "<br><br><br><br>";

		exit();

		$getLinkTag = explode("&lt;a href=&quot;", $newValue);

		$endLinkTagPosition = strpos($getLinkTag[1], "/&quot;&gt;");

		$explodeLinkTag = substr($getLinkTag[1], strlen($getLinkTag[1]), $endLinkTagPosition);

		var_dump($explodeLinkTag); echo "<br><br><br><br>";
		var_dump($getLinkTag); exit();
		//$position = strpos($initialHTML, "class=titul");
		echo $initialHTML;
	}
}
?>