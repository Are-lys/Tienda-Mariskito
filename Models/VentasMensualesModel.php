<?php 

	class VentasMensualesModel extends Mysql
	{
	
		public function __construct()
		{
			parent::__construct();
		}

        public static function MESES(){
            $m = [
                'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
            ];
            return $m;
        }
        
        public function lastOrders(string $inicio, string $fin){
			$sql = "SELECT p.idpedido, CONCAT(pr.nombres,' ',pr.apellidos) as nombre, t.tipopago, p.monto, p.status 
					FROM pedido p
					INNER JOIN persona pr
					ON p.personaid = pr.idpersona
                    INNER JOIN tipopago t 
                    ON p.tipopagoid = t.idtipopago
					WHERE DATE(fecha) >= '$inicio' AND DATE(fecha) <= '$fin'
					ORDER BY p.idpedido DESC LIMIT 10 ";
			$request = $this->select_all($sql);
			return $request;
		}

	}
 ?>