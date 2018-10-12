<?php
 	class Comment implements Iterator{
 		public $var;
 		private $comment = array();

 		public function __construct($post){
 			if(is_array($comment)){
 				$this->comment = $comment;
 			}
 		}

 		public function rewind(){
 			reset($this->comment);
 		}

 		public function current(){
 			return current($this->comment);
 		}

 		public function key(){
 			return key($this->var);
 		}

 		public function next(){
 			return next($this->var);
 		}

 		public function valid(){
 			return ($this->current()!=false);
 		}
 	}

?>