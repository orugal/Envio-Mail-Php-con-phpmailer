# Envio mail php con phpmailer
Una forma fácil de enviar mensajes de correo electrónico por medio de la calse PHPmailer. Este se puede usar con AJAX o simplemente con PHP


Para empezar se debe tener en cuenta que se deben cambiar las constantes que estan en el archivo config/configuracion.php por los valores que necesitemos para nuestro proyecto.

Las constantes que se deben ajustar son:<br><br>

<pre>
define("_NOMBRE_EMPRESA"              ,"Nombre de tu empresa");//configurar<br>
define('_HOST_MAIL'										,'mail.correoWeb.com');//Configurar<br>
define('_SMTP_USER'										,'info@correoWeb.com');//configurar<br>
define('_SMTP_PASS'										,'claveCorreo');//configurar<br>
define('_MAIL_ADMIN'									,'info@correoWeb.com');//configurar<br>
</pre>

<strong>_NOMBRE_EMPRESA</strong> = Es donde se debe poner el nombre de la empresa o proyecto que está enviando el mail, el uso de esa variable es opcional, todo depende de lo que se quiera escribir en el mensaje enviado.<br>

<strong>_HOST_MAIL </strong>= es la url del servidor de envio de mails.<br>
<strong>_SMTP_USER </strong>= es el usuario por medio del cual se enviaran los mensajes.<br>
<strong>_SMTP_PASS </strong>= clave de la cuenta de correo por donde saldrán los mensajes.<br>
<strong>_MAIL_ADMIN </strong>= cuenta de correo de la persona a la cual le llegará el correo, Ojo!! Acá se coloca el mail de la persona administradora a la cual deben llegar los correos dentro de la empresa.<br><br>


Después de tener esto configurado vamos al archivo envio.php y realizar la respectiva configuración de lo que queremos enviar, hay que ver el archivo para saber que es muy intuitivo.

