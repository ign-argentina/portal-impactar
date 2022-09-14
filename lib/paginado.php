<?php

function get_paginado_json($n_registros,$items_x_pagina,$pagina,$funcion,$param_extra_arr) {

	$param_extra_str = "";
	$json = "\"paging\":{";
	
	for ($i=0; $i<sizeof($param_extra_arr); $i++) {
		
		$param_extra_str .= "," . $param_extra_arr[$i];
		
	}
		
	$npaginas = ceil($n_registros/$items_x_pagina);
	
	if($n_registros>$npaginas) {
		
		if($pagina>1) {
			
			$json .= "\"prev\":{\"onclick\":\"".$funcion."(". ($pagina-1) . $param_extra_str.")\"},";

		}
		
		$json .= "\"data\":[";
				
		for($i=1;$i<$npaginas+1;$i+=1) {
				
			if (($i) == $pagina) {
					
				$json .= "{\"page\":$i,\"onclick\":\"".$funcion."(" . $i . $param_extra_str.")\", \"active\":\"active\"},";		
					
			}else{
					
				$json .= "{\"page\":$i,\"onclick\":\"".$funcion."(" . $i . $param_extra_str.")\", \"active\":\"\"},";					
					
			}

		}

		$json = substr($json,0,strlen($json)-1);

		$json .= "]";	
				
		if($pagina<($npaginas)) {

			$json .= ",\"next\":{\"onclick\":\"".$funcion."(". ($pagina+1) . $param_extra_str.")\"}";
				
		}
	
	}else{
		
		if ($n_registros == 1) {
		
			$json .= "\"data\":[{\"page\":1,\"onclick\":\"".$funcion."(" . 1 . $param_extra_str.")\", \"active\":true}]";
		
		}else{
			
			$json .= "\"data\":[]";
			
		}
		
	}

	$json .= "}";

	return $json;

}

?>