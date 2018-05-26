<?php
 class Droit{
	

	public function icon($dept){
		if ($dept == "Habitat") {
			$class = "fa-home";
		}elseif ($dept == "Micro Credit") {
			$class = "fa-money";
		}elseif ($dept == "Orphelinat") {
			$class = "fa-child";
		}elseif ($dept == "Parrainage") {
			$class = "fa-group";
		}



		return $class;
	}
}

?>