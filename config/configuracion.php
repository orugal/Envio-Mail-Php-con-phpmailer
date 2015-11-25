<?php
/*
* Archivo de Configuracion del sistema
* @author Farez Prieto
* @date 11 de noviembre de 2015
*/

define("_NOMBRE_EMPRESA"                                ,"Nombre de tu empresa");//configurar

//DATOS DE ENVIO DE CORREOS
define('_DIR_PLUGIN'									,'core/phpmailer/');
define('_MAILER'										,'mail');
define('_HOST_MAIL'										,'mail.correoWeb.com');//Configurar
define('_SMTP_AUTH'										,true);
define('_SMTP_USER'										,'info@correoWeb.com');//configurar
define('_SMTP_PASS'										,'claveCorreo');//configurar
define('_ES_HTML'										,true);
//Correo del administrador
define('_MAIL_ADMIN'									,'info@correoWeb.com');//configurar
?>
