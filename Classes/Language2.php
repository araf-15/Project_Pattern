<?php 
	class Language2{
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

		public function __clone(){
			$lang = new Language2();
			$lang->setFramework($this->framework);
			$lang->setCat($this->catagory);
			return $lang;
		}
	}
?>