<?php 

	class SolicitudVentaModel extends Mysql
	{
		private $idusuario;
		private $tipo_mueble;
		private $diseño;
		private $acabado;
		private $dimensiones_cm;
		private $tipo_madera;
		private $descripcion;
		
		public function __construct()
		{
			parent::__construct();
		}	

		public function insertSolicitud(string $idusuario, string $tipo_mueble, string $diseño, string $acabado, string $dimensiones_cm, string $tipo_madera, string $descripcion){

			$this->idusuario = $idusuario;
			$this->tipo_mueble = $tipo_mueble;
			$this->diseño = $diseño;
			$this->acabado = $acabado;
			$this->dimensiones_cm = $dimensiones_cm;
			$this->tipo_madera = $tipo_madera;
			$this->descripcion = $descripcion;
			$return = 0;

            $query_insert  = "INSERT INTO solicitud_venta(idusuario,tipo_mueble,diseño,acabado,dimensiones_cm,tipo_madera,descripcion) 
                              VALUES(?,?,?,?,?,?,?,?)";
            $arrData = array($this->idusuario,
                            $this->tipo_mueble,
                            $this->diseño,
                            $this->acabado,
                            $this->dimensiones_cm,
                            $this->tipo_madera,
                            $this->descripcion);
            $request_insert = $this->insert($query_insert,$arrData);
            $return = $request_insert;
			
	        return $return;
		}

	}
 ?>