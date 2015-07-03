<?php
	
	/**
	Ejemplo API RESTful Básica
	*/

	require_once('../clases/DataBaseHandler.php');

	//Autentificación HTTP
	if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
	    header("WWW-Authenticate: Basic realm=\"Pagina protegida\"");
	    header("HTTP\ 1.0 401 Unauthorized");
	    echo 'No estas autorizado para ver este contenido.';
	    exit;
	}else{
		//Comparar si existe el usuario y el password donde lo tengai!
		//verificar que efectivamente es un usuario valido
		//Conectamos a la Base de Datos
		$db = DataBaseHandler::getInstance()->connect();	
			
		$query = "SELECT * 
				  FROM `cruge_user` 
				  WHERE username = '{$_SERVER['PHP_AUTH_USER']}' AND password=('{$_SERVER['PHP_AUTH_PW']}')";
		
	
		$data = $db->Execute($query);
		if ($data->EOF) {
	    	header("WWW-Authenticate: Basic realm=\"Pagina protegida\"");
	    	header("HTTP\ 1.0 401 Unauthorized");
	    	echo 'No estas autorizado para ver este contenido.';
	    	exit;
		}
	}


	//Conectamos a la Base de Datos
	$db = DataBaseHandler::getInstance()->connect();


	$method = $_SERVER['REQUEST_METHOD'];

	//Dependiendo el método de la petición, 
	switch ($method) {
		case 'GET':
			getMethod();
			break;

		case 'POST':
			postMethod();
			break;			

		case 'PUT':
			putMethod();
			break;	

		case 'DELETE':
			deleteMethod();
			break;	

		default:
			break;
	}

	function getMethod()
	{
		header("HTTP/1.1 200 OK" );
		$response['status']=200;
		$response['status_message']="OK";
		$response['data']="";
		$i = 0;
		//Conectamos a la Base de Datos
		$db = DataBaseHandler::getInstance()->connect();
		$query = "SELECT * FROM `torneo`";
		$data = $db->Execute($query);
		if($data->EOF){
			echo "Ningun registro fue encontrado.";
		}
		else{
			while($data && !$data->EOF)
			{
				$torneo[$i]['TOR_correl'] = $data->fields[0];
				$torneo[$i]['TOR_division'] = $data->fields[1];
				$torneo[$i]['TOR_nombre'] = $data->fields[2];
				$torneo[$i]['TOR_agno'] = $data->fields[3];
				$torneo[$i]['TOR_periodo'] = $data->fields[4];
				$torneo[$i]['TOR_premio'] = $data->fields[5];
				$torneo[$i]['TOR_ganador'] = $data->fields[6];
				$torneo[$i]['TOR_tipo'] = $data->fields[7];
						
				$i++;		
				$data->MoveNext();
			}			
			//Codificamos a formato JSON
			foreach ($torneo as $key) {
				echo json_encode($key);
			}
			
		}
	}
	function postMethod()
	{
		header("HTTP/1.1 200 OK" );
		$response['status']=200;
		$response['status_message']="OK";
		$response['data']="";
		$data = json_decode(file_get_contents('php://input'));
		$datos['nombre'] = $data->nombre;
		$datos['apellido'] = $data->apellido;
		$datos['celular'] = $data->celular;
		$datos['email'] = $data->email;
		$db->AutoExecute('contacto',$datos, 'INSERT');
	}



?>