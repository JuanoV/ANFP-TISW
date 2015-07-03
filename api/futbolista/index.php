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
		$query = "SELECT * FROM `futbolista`";
		$data = $db->Execute($query);
		if($data->EOF){
			echo "Ningun registro fue encontrado.";
		}
		else{
			while($data && !$data->EOF)
			{
				$futbolista[$i]['FUT_correl'] = $data->fields[0];
				$futbolista[$i]['FUT_nombre'] = $data->fields[1];
				$futbolista[$i]['FUT_apellidoPat'] = $data->fields[2];
				$futbolista[$i]['FUT_apellidoMat'] = $data->fields[3];
				$futbolista[$i]['FUT_fechaNacimiento'] = $data->fields[4];
				$futbolista[$i]['FUT_nacionalidad'] = $data->fields[5];
				$futbolista[$i]['FUT_estado'] = $data->fields[6];
				$futbolista[$i]['FUT_estadoCivil'] = $data->fields[7];
				$i++;
				$data->MoveNext();
			}			
			//Codificamos a formato JSON
			foreach ($futbolista as $key) {
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