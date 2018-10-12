<?php
	class Language{
		private $catagory;
		private $framework;

		public function setCat($a){
			$this->catagory = $a;
		}

		public function getCat(){
			return $this->catagory;
		}

		public function setFramework($b){
			$this->framework = $b;
		}

		public function getFramework(){
			return $this->framework;
		}
	}
?>