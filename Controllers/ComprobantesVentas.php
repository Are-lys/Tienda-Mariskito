<?php
	class ComprobantesVentas extends Controllers{
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
			getPermisos(MCOMPROBANTESVENTAS);
		}

		public function ComprobantesVentas()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "ComprobantesVentas";
			$data['page_title'] = "COMPROBANTES VENTAS <small>MARISKITO</small>";
			$data['page_name'] = "comprobantesVentas";
			$data['page_functions_js'] = "functions_comprobantesVentass.js";
			$this->views->getView($this,"comprobantesVentas",$data);
		}

	}


 ?>