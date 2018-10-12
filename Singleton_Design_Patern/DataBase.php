<?php
	class DataBase{
		public static $instance;

		public function __construct(){
			if(!self::$instance){
				self::$instance = $this;
				echo "Created a new self instance <br/>";
				return self::$instance;
			}else{
				echo "Old instance <br/>";
				return self::$instance;
			}
		}
	}
?>