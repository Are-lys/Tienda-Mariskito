<?php
	class SolicitudVenta extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
			//session_regenerate_id(true);
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(MSOLICITUDVENTA);
		}

		public function SolicitudVenta()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Solicitud De Venta";
			$data['page_title'] = "SOLICITUD DE VENTA <small>MARISKITO</small>";
			$data['page_name'] = "solicitudVenta";
			$data['page_functions_js'] = "functions_solicitudVenta.js";
			$this->views->getView($this,"solicitudVenta",$data);
		}

        public function setSolicitud(){
			if($_POST){			
				if(empty($_POST['txtIdentificacion']) || empty($_POST['txtNombre']) || empty($_POST['txtApellido']) || empty($_POST['txtTelefono']) || empty($_POST['txtEmail']) || empty($_POST['listRolid']) || empty($_POST['listStatus']) )
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{ 
					$idSolicitud = intval($_POST['idSolicitud']);
					$idusuario = intval(strClean($_POST['idusuario']));
					$tipo_mueble = ucwords(strClean($_POST['tipo_mueble']));
					$diseño = ucwords(strClean($_POST['diseño']));
					$acabado = ucwords(strClean($_POST['acabado']));
					$dimensiones_cm = ucwords(strClean($_POST['dimensiones_cm']));
					$tipo_madera = ucwords(strClean($_POST['tipo_madera']));
					$descripcion = ucwords(strClean($_POST['descripcion']));
					$request_soli = "";
					if($idSolicitud == 0)
					{
						$option = 1;

						if($_SESSION['permisosMod']['w']){
							$request_user = $this->model->insertSolicitud($idusuario,
																				$tipo_mueble, 
																				$diseño, 
																				$acabado, 
																				$dimensiones_cm,
																				$tipo_madera, 
																				$descripcion );
						}
					}

					if($request_soli > 0 )
					{
						if($option == 1){
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						}else{
							$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
						}
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}
