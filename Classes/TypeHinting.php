<?php

	class TypeHinting{

		public function getValues(array $x){
			foreach($x as $values){
				echo "<br/>".$values[0].": ";
				echo $values[1]*$values[2];
			}
		}
	}

?>