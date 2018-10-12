<?php
	class Observable{
		private $observers = array();

		public function register($object){
			if($object instanceof Observer){
				$this->observers[] = $object;
			}else{
				echo "Object Should be implements observer interface <br/>";
			}
		}

		public function stateChange(){
			foreach ($this->observers as $ovserver) {
				$ovserver->message();
			}
		}
	}
?>