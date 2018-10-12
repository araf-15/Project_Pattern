<?php
	class Emoticon{
		private $post;
		public function __construct($object){
			$this->post = $object;
		}

		private function parseEmoticon($content){
			// Coding Process will be go here...
		}
		
		public function getContent(){
			$post->filter();
			$content = $this->parseEmoticon($post->getContent());
			return $content;
		}
	}
?>