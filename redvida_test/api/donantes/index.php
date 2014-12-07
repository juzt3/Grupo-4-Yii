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

		$query = "SELECT * FROM `donantes`";
		$data = $db->Execute($query);
		
		if($data->EOF){
			echo "Ningun registro fue encontrado.";
		}
		else{
			while($data && !$data->EOF)
			{
				$urgenca[$i]['nombres'] = $data->fields[0];
				$urgenca[$i]['apellidos'] = $data->fields[1];
				$urgenca[$i]['rut'] = $data->fields[2];
				//$urgenca[$i]['direccion'] = $data->fields[3];
				$urgenca[$i]['comuna'] = $data->fields[4];
				$urgenca[$i]['tipo_sangre'] = $data->fields[5];
				$urgenca[$i]['alergias'] = $data->fields[6];
				$urgenca[$i]['donanteorganos'] = $data->fields[8];
				$urgenca[$i]['email'] = $data->fields[9];
				$urgenca[$i]['telefono'] = $data->fields[10];
				$urgenca[$i]['celular'] = $data->fields[11];
				$urgenca[$i]['habilitado'] = $data->fields[12];
				$urgenca[$i]['sexo'] = $data->fields[13];
				$urgenca[$i]['fecha_nac'] = $data->fields[14];
				$urgenca[$i]['afiliacion'] = $data->fields[15];
				$urgenca[$i]['donantemedula'] = $data->fields[16];
				$urgenca[$i]['fecha_muerte'] = $data->fields[17];
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