<?php

require('../vendor/autoload.php');

	include_once "../webhook/somosioticos_dialogflow.php";
	credenciales('hammy','123456789');
	
		
	
	
	
	
	
	if (intent_recibido("calcular")){
	
		$valor1 = obtener_variables()['numero1'];
		$valor2 = obtener_variables()['numero2'];
		$resultado = $valor1 + $valor2;
		enviar_texto("el resultado es $resultado");
	}
	
	


	
   


?>
