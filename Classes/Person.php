<?php
 class Person{

 	public $name = "Md. Araf Hasan";
 	public $age = 24;
 	public $skill = "Programming";

 	private $Email = "araf.hasan15@gmail.com";
 	protected $password = "12345";

 	public function innerClass(){
 		echo "Inner Class: ";
 		foreach ($this as $key => $info) {
 			echo "<pre>";
 			echo "$key => $info";
 			echo "<pre/>";
 		}
 	}
 }

?>