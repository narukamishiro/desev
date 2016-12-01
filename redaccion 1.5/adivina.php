<?php
	global $resp=rand(0,100);
	global $cont=0;
	global $fin=0;
	$nm=0;
	function control($nm){
		$cont++;
		if($nm==$resp){
			echo "felicidades";
			$fin=1;
		}else{
			if($nm<$resp){
				echo "el numero es mayor";
			}else{
				echo "el numero es menor";
			}
		}
	}
	do{
		
		if (!empty($_REQUEST['nm'])){
			$year=$_REQUEST['nm'];
		}
		control($nm);
	}while($fin==0);
	
?>