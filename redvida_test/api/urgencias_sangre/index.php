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
	}
	else{
		//Comparar si existe el usuario y el password donde lo tengai!
		//verificar que efectivamente es un usuario valido
		//Conectamos a la Base de Datos
		$db = DataBaseHandler::getInstance()->connect();
		$query = "SELECT * FROM `tbl_user` WHERE username = '{$_SERVER['PHP_AUTH_USER']}' AND password = SHA1('{$_SERVER['PHP_AUTH_PW']}')";
		$data = $db->Execute($query);
		if ($data->EOF) {
	    	header("WWW-Authenticate: Basic realm=\"Pagina protegida\"");
	    	header("HTTP\ 1.0 401 Unauthorized");
	    	echo 'No estas autorizado para ver este contenido.';
	    	exit;
		}
	}






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

		$query = "SELECT * FROM `urgencias_sangre`";

		$data = $db->Execute($query);
		
		if($data->EOF){
			echo "Ningun registro fue encontrado.";
		}
		else{
			while($data && !$data->EOF)
			{
				$urgenca[$i]['rut'] = $data->fields[2];
				$urgenca[$i]['nombre_paciente'] = $data->fields[3];
				$urgenca[$i]['apellido_pat'] = $data->fields[4];
				$urgenca[$i]['apellido_mat'] = $data->fields[5];
				$urgenca[$i]['grado_urgencia'] = $data->fields[8];
				$urgenca[$i]['tipo_sangre'] = $data->fields[9];
				$i++;
				$data->MoveNext();
			}
			//Codificamos a formato JSON
			echo json_encode($urgenca);
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