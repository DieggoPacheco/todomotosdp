<?php 
	
	//define("BASE_URL", "http://localhost/tienda_virtual/");
	//const BASE_URL = "https://abelosh.com/store";
	const BASE_URL = "http://localhost/todomotosdp";

	//Zona horaria
	date_default_timezone_set('America/Bogota');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "todomotosdp1";
	const DB_USER = "postgres";
	const DB_PASSWORD = "12345";
	const DB_CHARSET = "utf8";

	const SPD = ",";
	const SPM = ".";

	const SMONEY = "$";
	const CURRENCY = "USD";

	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "AYcF2p8R-9gV_iUQ1AGdOz_6vOAc_jwwUSfCC4FQr6bWLT_7_d4mbDFrv1ulNnelVZcicrJwgwVwJIRF";
	const SECRET = "EIhyWpvOuPhIBhTKG54dyTJ2HtFc-EbegpQgsyqQkHKqRzZTu0zzdHr9_M7A7u25hNG0o_NySx8wBuCt";
	
	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPESA = "TodoMotosDP";
	const WEB_EMPRESA = "www.todomotosdp.com";

	//Datos Empresa
	const DIRECCION = "Santa Clara (Frente al hotel El libano)";
	const TELEMPRESA = "+57 3157939712";
	const EMAIL_EMPRESA = "todomotosdp@gmail.com";
	const EMAIL_PEDIDOS = "dapachecopa@ufpso.edu.co";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 50;

	//Módulos
	const MCLIENTES = 3;
	const MPEDIDOS = 5;

	//Roles
	const RADMINISTRADOR = 1;
	const RCLIENTES = 7;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');
	

 ?>