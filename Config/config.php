<?php 
	//const BASE_URL = "https://abelosh.com/store";
	const BASE_URL = "http://localhost/Proyecto_Tienda";

	//Zona horaria
	date_default_timezone_set('America/Guayaquil');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "bd_tienda";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 0; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "Acfm1vVQMDUBginZdeJYEGo8iEBugU8LV3gzjJ7W6WSPKNz5w8ElnAfa98KBvQNwMvPTsPHsibOGj-e-";
	const SECRET = "EKpEQyQoAG3hBw1OeerW4gwcdN4e0fEApwiEH-LWiZk5Q9fSHOis00qAZuPh-0qFqQKYakSe3lXJSKUQ";
 
	//Datos envio de correo
	const NOMBRE_REMITENTE = "MARISKITO";
	const EMAIL_REMITENTE = "arelyschancay@gmail.com";
	const NOMBRE_EMPESA = "MARISKITO";
	const WEB_EMPRESA = "www.mariskito.com";

	const DESCRIPCION = "Una opción práctica y sabrosa para quienes aman el buen pescado en todas sus formas.";
	const SHAREDHASH = "TiendaVirtual";

	//Datos Empresa
	const DIRECCION = "Muey  -  Salinas";
	const TELEMPRESA = "+(593) 989506642";
	const WHATSAPP = "+(593) 989506642";
	const EMAIL_EMPRESA = "arelyschancay@gmail.com";
	const EMAIL_PEDIDOS = "arelyschancay@gmail.com"; 
	const EMAIL_SUSCRIPCION = "arelyschancay@gmail.com";
	const EMAIL_CONTACTO = "arelyschancay@gmail.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 10;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;
	const MVENTASMENSUALES = 10;
	const MCOMPROBANTESVENTAS = 11;
	const MSOLICITUDVENTA = 12;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 4;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/";
	const INSTAGRAM = "https://www.instagram.com/";
	

 ?>