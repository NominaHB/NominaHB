<?php
	
	//Llamado a clase de conexión
	require 'providers/database.php';
	session_start();

	$controller = 'LoginController';

	if(!isset($_REQUEST['controller'])) {
		require 'controllers/'.$controller.'.php';

		$controller = ucwords($controller);
		$controller = new $controller;
		$controller->index();
	} else {
		$controller = ucwords($_REQUEST['controller'].'Controller');
		// Condicional Ternario   condición      verdadero           Falso
        $method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';
        require 'controllers/'.$controller.'.php';
		$controller = new $controller;

        call_user_func(array($controller, $method));
    }