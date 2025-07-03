<?php
	class VentasMensuales extends Controllers{
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
			getPermisos(MVENTASMENSUALES);
		}

		public function VentasMensuales()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Últimos Pedidos";
			$data['page_title'] = "ÚLTIMOS PEDIDOS <small>MARISKITO</small>";
			$data['page_name'] = "ventasMensuales";
			$data['page_functions_js'] = "functions_ventasMensuales.js";
			$inicio = date('Y-m-d');
			$fin = date('Y-m-d');
			$data['lastOrders'] = $this->model->lastOrders($inicio,$fin);
			$this->views->getView($this,"ventasMensuales",$data);
		}

		public function ultimosPedidosFecha(){
			if($_POST){
				$inicio = $_POST['inicio'];
				$fin = $_POST['fin'];
				$data = $this->model->lastOrders($inicio,$fin);
				if(empty($data)){
					$arrResponse = array("status" => false, "msg" => "No hay información disponible.");
				}else{
					$arrResponse = array("status" => true, "html" => $data);
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}


	}
