<?php 
require 'vendor/autoload.php';

	include_once "../webhook/somosioticos_dialogflow.php";
	credenciales('hammy','123456789');
	
use \Slim\App; 
 
$app = new App(); 
 
$app->post('/', function ($request, $response) { 
  error_log($request->getBody()->getContents()); 
  return $response->withJson(array( 
    'replies' => [ 
      array('type' => 'text', 'content' => 'Roger that') 
    ], 
    'conversation' => array( 
      'memory' => array('key' => 'value') 
    ) 
  )); 
}); 


	if (intent_recibido("calcular")){
	
		$valor1 = obtener_variables()['numero1'];
		$valor2 = obtener_variables()['numero2'];
		$resultado = $valor1 + $valor2;
		enviar_texto("el resultado es $resultado");
	}
	
 
$app->post('/errors', function ($request, $response) { 
  error_log($request->getBody()->getContents()); 
  return $response; 
}); 
 
$app->run();






	
		
	
	
