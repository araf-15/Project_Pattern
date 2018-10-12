<?php
	namespace araf;
	 class Java{

	 	public function __construct(){
	 		echo "I am learning java <br/>";
	 	}
	 }

	 define("HTML", "I know html<br/>"); //No need to define namespace in index.php file
	 const CSS = "I love CSS.<br/>"; //namespace shoould be define in index.php file

	 function coding(){
	 	echo "I am a php coder.<br/>";	//namespace should be define in index.php file
	 }
?>