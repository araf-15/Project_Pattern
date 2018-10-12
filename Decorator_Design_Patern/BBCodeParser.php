<?php
	class BBCodeParser{
		private $post;
		public function __construct($object){
			$this->post = $object;
		}

		private function parseBBCode($content){
			// Coding Process will be go here...
		}

		public function getContent(){
			$post->filter();
			$content = $this->parseBBCode($post->getContent());
			return $content;
		}
	}
?>