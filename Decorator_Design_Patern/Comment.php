<?php
	class Comment{
		private $date;
		private $content;

		public function filter(){
			$this->date = $filtered_date;
			$this->content = $filtered_content;
		}

		public function getContent(){
			return $this->content;
		}
	}
?>